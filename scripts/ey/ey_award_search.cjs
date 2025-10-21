#!/usr/bin/env node
/**
 * Etihad Award Search (FULL-B: incremental, screenshots, provider-aware)
 *
 * Watches:
 *  - https://api-des.etihad.com/airlines/EY/v2/search/air-calendars?...
 *  - https://api-des.etihad.com/airlines/EY/v2/search/air-bounds?...
 *
 * Output:
 *  storage/app/travelbuddy/
 *    ├─ ey_air_calendars.request.json     ← latest (overwritten)
 *    ├─ ey_air_calendars.response.json    ← latest (overwritten)
 *    ├─ ey_air_bounds.request.json        ← latest (overwritten)
 *    ├─ ey_air_bounds.response.json       ← latest (overwritten)
 *    └─ run-<runId>/ey/
 *         ├─ 1-request.json
 *         ├─ 1-response.json
 *         ├─ [trace screenshots if --screens trace]
 *         ├─ load.webp (verbose|trace)
 *         ├─ first-calendars.webp (verbose|trace, if seen)
 *         ├─ first-bounds.webp (verbose|trace, if seen)
 *         ├─ final.png (lite|verbose|trace)
 *         ├─ failure.png (all)
 *         └─ log.txt
 */

const fs = require("fs");
const path = require("path");
const { chromium } = require("playwright");

/** ---------- CLI helpers ---------- */
function arg(name, def) {
  const i = process.argv.indexOf(`--${name}`);
  if (i !== -1 && i + 1 < process.argv.length && !process.argv[i + 1].startsWith("--")) return process.argv[i + 1];
  return def;
}
const flag = (name) => process.argv.includes(`--${name}`);

/** ---------- FS helpers ---------- */
function ensureDir(p) { try { fs.mkdirSync(p, { recursive: true }); } catch {} }
function writeJsonSafe(filePath, obj) {
  try {
    const fd = fs.openSync(filePath, "w");
    fs.writeSync(fd, JSON.stringify(obj, null, 2));
    fs.fsyncSync(fd);
    fs.closeSync(fd);
  } catch (e) { console.error("[writeJsonSafe]", filePath, e?.message || e); }
}
function appendLog(file, msg) { try { fs.appendFileSync(file, msg + "\r\n"); } catch {} }

/** ---------- Screenshots ---------- */
async function takeScreenshotAuto(page, folder, name, logFile, screens) {
  const isFinalOrFail = (name === "final" || name === "failure");
  const useWebp = (screens === "trace" || screens === "verbose") && !isFinalOrFail;
  const ext = useWebp ? "webp" : "png";
  const file = path.join(folder, `${name}.${ext}`);
  try { await page.screenshot({ path: file, fullPage: true }); appendLog(logFile, `[${new Date().toISOString()}] shot: ${name}.${ext}`); } catch {}
}

/** ---------- Date sanitizer (→ YYYYMMDD0000) ---------- */
function toEyDate(dateInput) {
  const s = String(dateInput).trim();
  let y, m, d;
  const dash = /^(\d{4})-(\d{2})-(\d{2})$/;               // YYYY-MM-DD
  const dashDMY = /^(\d{2})-(\d{2})-(\d{4})$/;            // DD-MM-YYYY
  const slashDMY = /^(\d{2})\/(\d{2})\/(\d{4})$/;         // DD/MM/YYYY
  const ymd = /^(\d{4})(\d{2})(\d{2})$/;                  // YYYYMMDD
  const dmy = /^(\d{2})(\d{2})(\d{4})$/;                  // DDMMYYYY

  if (dash.test(s)) {
    const m1 = s.match(dash); y = +m1[1]; m = +m1[2]; d = +m1[3];
  } else if (dashDMY.test(s)) {
    const m1 = s.match(dashDMY); y = +m1[3]; m = +m1[2]; d = +m1[1];
  } else if (slashDMY.test(s)) {
    const m1 = s.match(slashDMY); y = +m1[3]; m = +m1[2]; d = +m1[1];
  } else if (ymd.test(s)) {
    const m1 = s.match(ymd); y = +m1[1]; m = +m1[2]; d = +m1[3];
  } else if (dmy.test(s)) {
    const m1 = s.match(dmy); y = +m1[3]; m = +m1[2]; d = +m1[1];
  } else {
    throw new Error(`Unrecognized date format: ${s}`);
  }
  const mm = String(m).padStart(2, "0");
  const dd = String(d).padStart(2, "0");
  const yyyy = String(y);
  return `${yyyy}${mm}${dd}0000`;
}

(async () => {
  /** ---------- Args ---------- */
  const B_LOCATION = arg("B_LOCATION") || arg("from") || arg("origin");  // e.g., SYD
  const E_LOCATION = arg("E_LOCATION") || arg("to") || arg("destination"); // e.g., LAX
  const dateIn = arg("DATE_1") || arg("date");                            // e.g., 2026-02-07 or 07-02-2026 etc.

  if (!B_LOCATION || !E_LOCATION || !dateIn) {
    console.error("Missing args. Use: --B_LOCATION SYD --E_LOCATION LAX --date 2026-02-07");
    process.exit(1);
  }

  let DATE_1;
  try { DATE_1 = toEyDate(dateIn); }
  catch (e) { console.error(e.message); process.exit(1); }

  const headful = flag("headful");
  const debug = flag("debug");
  const screens = arg("screens", "fail").toLowerCase();
  const outDir = path.resolve(arg("out", "storage/app/travelbuddy"));
  const timeout = parseInt(arg("timeout", "120000"), 10);
  const proxy = arg("proxy", null);
  const runId = arg("runId", new Date().toISOString().replace(/[:.]/g, "-"));
  const PROVIDER = "ey";

  /** ---------- Dirs ---------- */
  ensureDir(outDir);
  const runDir = path.join(outDir, `run-${runId}`); ensureDir(runDir);
  const providerDir = path.join(runDir, PROVIDER); ensureDir(providerDir);
  const logFile = path.join(providerDir, "log.txt");
  appendLog(logFile, `[start] ${new Date().toISOString()}`);
  appendLog(logFile, `[mode] screens=${screens}`);
  appendLog(logFile, `[info] runId=${runId} provider=${PROVIDER}`);
  appendLog(logFile, `[info] outDir=${outDir}`);
  appendLog(logFile, `[info] runDir=${runDir}`);
  appendLog(logFile, `[info] providerDir=${providerDir}`);

  /** ---------- Build deep link ---------- */
  // Example:
  // https://digital.etihad.com/book/search?LANGUAGE=EN&CHANNEL=DESKTOP&B_LOCATION=SYD&E_LOCATION=LAX&TRIP_TYPE=O&CABIN=E&TRAVELERS=ADT&TRIP_FLOW_TYPE=AVAILABILITY&DATE_1=202602070000&WDS_ENABLE_MILES_TOGGLE=TRUE&FLOW=AWARD
  const base = new URL("https://digital.etihad.com/book/search");
  base.searchParams.set("LANGUAGE", "EN");
  base.searchParams.set("CHANNEL", "DESKTOP");
  base.searchParams.set("B_LOCATION", B_LOCATION);
  base.searchParams.set("E_LOCATION", E_LOCATION);
  base.searchParams.set("TRIP_TYPE", "O");
  base.searchParams.set("CABIN", "E"); // Economy by default (keep configurable later)
  base.searchParams.set("TRAVELERS", "ADT");
  base.searchParams.set("TRIP_FLOW_TYPE", "AVAILABILITY");
  base.searchParams.set("DATE_1", DATE_1);
  base.searchParams.set("WDS_ENABLE_MILES_TOGGLE", "TRUE");
  base.searchParams.set("FLOW", "AWARD");

  const searchUrl = base.toString();
  if (debug) console.log("[dbg] searchUrl =", searchUrl);
  appendLog(logFile, `[info] searchUrl=${searchUrl}`);

  /** ---------- Endpoints to watch ---------- */
  const CAL_PATH = "/airlines/EY/v2/search/air-calendars";
  const BND_PATH = "/airlines/EY/v2/search/air-bounds";
  const API_HOST = "api-des.etihad.com"; // capture by pathname anyway

  /** ---------- Browser ---------- */
  const userDataDir = path.resolve("scripts/.pw-ey");
  const launchCommon = {
    headless: !headful,
    args: [
      "--headless=new",
      "--no-sandbox",
      "--disable-dev-shm-usage",
      "--disable-blink-features=AutomationControlled"
    ],
  };
  if (proxy) launchCommon.proxy = { server: proxy };

  let context;
  try {
    context = await chromium.launchPersistentContext(userDataDir, {
      ...launchCommon,
      channel: "chrome",
      // Keep headers minimal; let Chrome supply normal client hints
      viewport: { width: 1400, height: 860 },
      ignoreHTTPSErrors: true,
      locale: "en-GB",
      timezoneId: "Australia/Brisbane",
      extraHTTPHeaders: {
        "Accept-Language": "en-GB,en;q=0.9",
        "Referer": "https://digital.etihad.com/",
      },
    });
  } catch {
    context = await chromium.launchPersistentContext(userDataDir, {
      ...launchCommon,
      viewport: { width: 1400, height: 860 },
      ignoreHTTPSErrors: true,
      locale: "en-GB",
      timezoneId: "Australia/Brisbane",
      extraHTTPHeaders: {
        "Accept-Language": "en-GB,en;q=0.9",
        "Referer": "https://digital.etihad.com/",
      },
    });
  }

  const page = await context.newPage();
  page.setDefaultTimeout(timeout);

  /** ---------- Logging ---------- */
  page.on("console", (m) => { const t = `[page:${m.type()}] ${m.text()}`; console.log(t); appendLog(logFile, t); });
  page.on("pageerror", (e) => { const t = `[pageerror] ${e.message}`; console.error(t); appendLog(logFile, t); });

  /** ---------- Light stealth ---------- */
  await page.addInitScript(() => {
    Object.defineProperty(navigator, "webdriver", { get: () => undefined });
    const f = () => ({ length: 2, item: () => ({}) });
    try { Object.defineProperty(navigator, "plugins", { get: f }); Object.defineProperty(navigator, "mimeTypes", { get: f }); } catch {}
    // eslint-disable-next-line no-undef
    window.chrome = window.chrome || { runtime: {} };
  });

  /** ---------- Capture state ---------- */
  let seq = 0;
  let firstCalendarsReq = null, firstCalendarsRes = null;
  let firstBoundsReq = null, firstBoundsRes = null;
  let tookCalShot = false, tookBndShot = false;

  page.on("request", async (req) => {
    try {
      const u = new URL(req.url());
      if (!u.pathname.startsWith("/airlines/EY/v2/search/")) return;

      const idx = ++seq;
      const rec = {
        method: req.method(),
        url: req.url(),
        headers: req.headers(),
        query: Object.fromEntries(u.searchParams || []),
        payload: (() => { try { return JSON.parse(req.postData() || "null"); } catch { return req.postData() || null; } })()
      };
      writeJsonSafe(path.join(providerDir, `${idx}-request.json`), rec);
      appendLog(logFile, `[${new Date().toISOString()}] ${idx}-request ${u.pathname}`);

      if (u.pathname.startsWith(CAL_PATH) && !firstCalendarsReq) firstCalendarsReq = rec;
      if (u.pathname.startsWith(BND_PATH) && !firstBoundsReq) firstBoundsReq = rec;

      if (screens === "trace") await takeScreenshotAuto(page, providerDir, `${idx}-trace-request`, logFile, screens);
    } catch {}
  });

  page.on("response", async (res) => {
    try {
      const u = new URL(res.url());
      if (!u.pathname.startsWith("/airlines/EY/v2/search/")) return;

      const idx = seq;
      const status = res.status();
      const text = await res.text();
      let body; try { body = JSON.parse(text); } catch { body = text; }
      writeJsonSafe(path.join(providerDir, `${idx}-response.json`), { status, body });
      appendLog(logFile, `[${new Date().toISOString()}] ${idx}-response ${u.pathname} status=${status}`);

      if (screens === "trace") await takeScreenshotAuto(page, providerDir, `${idx}-trace-response`, logFile, screens);

      if (u.pathname.startsWith(CAL_PATH) && status === 200 && !firstCalendarsRes) {
        firstCalendarsRes = { status, body };
        if (!tookCalShot && (screens === "verbose" || screens === "trace")) {
          tookCalShot = true; await takeScreenshotAuto(page, providerDir, "first-calendars", logFile, screens);
        }
      }
      if (u.pathname.startsWith(BND_PATH) && status === 200 && !firstBoundsRes) {
        firstBoundsRes = { status, body };
        if (!tookBndShot && (screens === "verbose" || screens === "trace")) {
          tookBndShot = true; await takeScreenshotAuto(page, providerDir, "first-bounds", logFile, screens);
        }
      }
    } catch {}
  });

  async function doFailure() { await takeScreenshotAuto(page, providerDir, "failure", logFile, screens); }

  /** ---------- Main ---------- */
  try {
    // Warm site (consent/CDN tokens), then navigate to the search URL
    await page.goto("https://digital.etihad.com/", { waitUntil: "domcontentloaded" }).catch(() => {});
    await page.waitForTimeout(250);

    await page.goto(searchUrl, { waitUntil: "domcontentloaded" }).catch(() => {});
    if (screens === "verbose" || screens === "trace") await takeScreenshotAuto(page, providerDir, "load", logFile, screens);

    // Wait until at least one of the APIs responds (prefer bounds, then calendars)
    await page.waitForResponse(r => r.url().includes(CAL_PATH) || r.url().includes(BND_PATH), { timeout }).catch(() => {});
    await page.waitForLoadState("networkidle", { timeout }).catch(() => {});
    await page.waitForTimeout(300);

    // Write "latest" at root + provider copies
    const latestCalReq = path.join(outDir, "ey_air_calendars.request.json");
    const latestCalRes = path.join(outDir, "ey_air_calendars.response.json");
    const latestBndReq = path.join(outDir, "ey_air_bounds.request.json");
    const latestBndRes = path.join(outDir, "ey_air_bounds.response.json");

    const provCalReq = path.join(providerDir, "ey_air_calendars.request.json");
    const provCalRes = path.join(providerDir, "ey_air_calendars.response.json");
    const provBndReq = path.join(providerDir, "ey_air_bounds.request.json");
    const provBndRes = path.join(providerDir, "ey_air_bounds.response.json");

    if (firstCalendarsReq) { writeJsonSafe(latestCalReq, firstCalendarsReq); writeJsonSafe(provCalReq, firstCalendarsReq); }
    if (firstCalendarsRes) { writeJsonSafe(latestCalRes, firstCalendarsRes); writeJsonSafe(provCalRes, firstCalendarsRes); }
    if (firstBoundsReq)    { writeJsonSafe(latestBndReq, firstBoundsReq);    writeJsonSafe(provBndReq, firstBoundsReq); }
    if (firstBoundsRes)    { writeJsonSafe(latestBndRes, firstBoundsRes);    writeJsonSafe(provBndRes, firstBoundsRes); }

    const success = !!(firstBoundsRes || firstCalendarsRes);

    if (success) {
      if (screens === "lite" || screens === "verbose" || screens === "trace") {
        await takeScreenshotAuto(page, providerDir, "final", logFile, screens);
      }
      appendLog(logFile, "[done] success");
      console.log(JSON.stringify({
        ok: true,
        provider: PROVIDER,
        runId,
        B_LOCATION, E_LOCATION, DATE_1,
        outDir, runDir, providerDir,
        calendars: {
          requestPath: firstCalendarsReq ? latestCalReq : null,
          responsePath: firstCalendarsRes ? latestCalRes : null,
          providerRequestPath: firstCalendarsReq ? provCalReq : null,
          providerResponsePath: firstCalendarsRes ? provCalRes : null,
        },
        bounds: {
          requestPath: firstBoundsReq ? latestBndReq : null,
          responsePath: firstBoundsRes ? latestBndRes : null,
          providerRequestPath: firstBoundsReq ? provBndReq : null,
          providerResponsePath: firstBoundsRes ? provBndRes : null,
        }
      }));
      process.exit(0);
    } else {
      await doFailure();
      appendLog(logFile, "[done] noAPIs");
      console.error(JSON.stringify({
        ok: false,
        provider: PROVIDER,
        runId,
        reason: "NoEYApisSeen",
        runDir, providerDir
      }));
      process.exit(1);
    }

  } catch (e) {
    await doFailure();
    appendLog(logFile, `[fatal] ${e?.message || e}`);
    console.error("[error]", e?.message || e);
    process.exit(1);

  } finally {
    await context.close().catch(() => {});
  }
})();
