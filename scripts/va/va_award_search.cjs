#!/usr/bin/env node
/**
 * VA Award Search (FULL-B: incremental, screenshot mode, AUTO format)
 *
 * Modes ( --screens=... )
 *   fail     = only on failures  (default)
 *   lite     = final success + failure
 *   verbose  = load + first-graphql + final + failure
 *   trace    = verbose + per-request+per-response screenshots
 *
 * Screenshot format (AUTO):
 *   verbose/trace => webp (small)
 *   final/failure => png (full fidelity)
 *
 * Output structure:
 *   storage/app/travelbuddy/
 *     ├─ va_bookingAirSearch.request.json   ← latest (overwritten)
 *     ├─ va_bookingAirSearch.response.json  ← latest (overwritten)
 *     ├─ run-2025-.../
 *     │    ├─ 1-request.json
 *     │    ├─ 1-response.json
 *     │    ├─ 1-trace-request.webp     (trace only)
 *     │    ├─ 1-trace-response.webp    (trace only)
 *     │    ├─ load.webp (verbose|trace)
 *     │    ├─ first-graphql.webp (verbose|trace)
 *     │    ├─ final.png (lite|verbose|trace)
 *     │    ├─ failure.png (all)
 *     │    └─ log.txt
 */

const fs = require("fs");
const path = require("path");
const { chromium } = require("playwright");

/** CLI Helpers **/
function arg(name, def) {
  const i = process.argv.indexOf(`--${name}`);
  if (i !== -1 && i + 1 < process.argv.length && !process.argv[i + 1].startsWith("--")) {
    return process.argv[i + 1];
  }
  return def;
}
const flag = (name) => process.argv.includes(`--${name}`);

/** Filesystem helpers **/
function ensureDir(p) { try { fs.mkdirSync(p, { recursive: true }); } catch {} }
function writeJsonSafe(filePath, obj) {
  try {
    const fd = fs.openSync(filePath, "w");
    fs.writeSync(fd, JSON.stringify(obj, null, 2));
    fs.fsyncSync(fd);
    fs.closeSync(fd);
  } catch (e) {
    console.error("[writeJsonSafe] Error writing", filePath, e?.message || e);
  }
}
function appendLog(file, msg) {
  try { fs.appendFileSync(file, msg + "\r\n"); } catch {}
}

/** AUTO screenshot helper */
async function takeScreenshotAuto(page, runDir, name, logFile, screens) {
  const isFinalOrFail = (name === "final" || name === "failure");
  const useWebp = (screens === "trace" || screens === "verbose") && !isFinalOrFail;
  const ext = useWebp ? "webp" : "png";
  const file = path.join(runDir, `${name}.${ext}`);
  try {
    await page.screenshot({ path: file, fullPage: true });
    appendLog(logFile, `[${new Date().toISOString()}] screenshot: ${name}.${ext}`);
  } catch {}
}

(async () => {
  /** Parse CLI arguments **/
  const origin = arg("origin");
  const destination = arg("destination");
  const date = arg("date");

  if (!origin || !destination || !date) {
    console.error("Missing required args. Use: --origin SIN --destination BNE --date 02-02-2026");
    process.exit(1);
  }

  const headful = flag("headful");
  const debug = flag("debug");
  const screens = arg("screens", "fail").toLowerCase();
  const outDir = path.resolve(arg("out", "storage/app/travelbuddy"));
  const timeout = parseInt(arg("timeout", "120000"), 10);
  const proxy = arg("proxy", null);

  /** Create output folders */
  ensureDir(outDir);
  const tsSafe = new Date().toISOString().replace(/[:.]/g, "-");
  const runDir = path.join(outDir, `run-${tsSafe}`);
  ensureDir(runDir);
  const logFile = path.join(runDir, "log.txt");
  appendLog(logFile, `[start] ${new Date().toISOString()}`);
  appendLog(logFile, `[mode] screens=${screens}`);

  /** Build booking URL (hash fragment SPA router) **/
  const base = new URL("https://book.virginaustralia.com/dx/VADX/");
  base.hash = [
    "/flight-selection?",
    "journeyType=one-way",
    "awardBooking=true",
    "class=Economy",
    "ADT=1",
    "CHD=0",
    "INF=0",
    `origin=${encodeURIComponent(origin)}`,
    `destination=${encodeURIComponent(destination)}`,
    `date=${encodeURIComponent(date)}`,
    `activeMonth=${encodeURIComponent(date)}`,
    "locale=en-GB",
  ].join("&");
  const bookingUrl = base.toString();
  if (debug) console.log("[dbg] bookingUrl =", bookingUrl);
  appendLog(logFile, `[info] bookingUrl=${bookingUrl}`);

  /** Launch browser (persistent for consent/cookies) **/
  const userDataDir = path.resolve("scripts/.pw-state");
  const launchCommon = {
    headless: !headful,
    args: ["--headless=new", "--no-sandbox", "--disable-dev-shm-usage", "--disable-blink-features=AutomationControlled"]
  };
  if (proxy) launchCommon.proxy = { server: proxy };

  let context;
  try {
    context = await chromium.launchPersistentContext(userDataDir, {
      ...launchCommon,
      channel: "chrome",
      userAgent: "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36",
      locale: "en-AU",
      timezoneId: "Australia/Brisbane",
      viewport: { width: 1400, height: 860 },
      ignoreHTTPSErrors: true,
      extraHTTPHeaders: { "Accept-Language": "en-AU,en;q=0.9", "Referer": "https://www.virginaustralia.com/au/en/" }
    });
  } catch {
    context = await chromium.launchPersistentContext(userDataDir, {
      ...launchCommon,
      userAgent: "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36",
      locale: "en-AU",
      timezoneId: "Australia/Brisbane",
      viewport: { width: 1400, height: 860 },
      ignoreHTTPSErrors: true,
      extraHTTPHeaders: { "Accept-Language": "en-AU,en;q=0.9", "Referer": "https://www.virginaustralia.com/au/en/" }
    });
  }

  const page = await context.newPage();
  page.setDefaultTimeout(timeout);

  /** Logging browser console */
  page.on("console", (m) => {
    const t = `[page:${m.type()}] ${m.text()}`;
    console.log(t);
    appendLog(logFile, t);
  });
  page.on("pageerror", (e) => {
    const t = `[pageerror] ${e.message}`;
    console.error(t);
    appendLog(logFile, t);
  });

  /** Anti automation tweaks */
  await page.addInitScript(() => {
    Object.defineProperty(navigator, "webdriver", { get: () => undefined });
    const f = () => ({ length: 1, item: () => ({}) });
    try {
      Object.defineProperty(navigator, "plugins", { get: f });
      Object.defineProperty(navigator, "mimeTypes", { get: f });
    } catch {}
    window.chrome = window.chrome || { runtime: {} };
  });

  /** GraphQL capture state **/
  const GRAPHQL_PATH = "/api/graphql";
  let seq = 0;
  let bookingReq = null;
  let bookingRes = null;
  let firstReq = null;
  let firstRes = null;
  let haveAnyGraphQL200 = false;
  let tookFirstGraphqlShot = false;
  /** Capture GraphQL requests */
  page.on("request", async (req) => {
    try {
      const u = new URL(req.url());
      if (u.pathname !== GRAPHQL_PATH || req.method() !== "POST") return;

      const payload = JSON.parse(req.postData() || "null");
      const idx = ++seq;

      const fileReq = path.join(runDir, `${idx}-request.json`);
      writeJsonSafe(fileReq, payload);
      appendLog(logFile, `[${new Date().toISOString()}] ${idx}-request`);

      // request screenshots in TRACE mode
      if (screens === "trace") {
        await takeScreenshotAuto(page, runDir, `${idx}-trace-request`, logFile, screens);
      }

      if (!firstReq) firstReq = payload;

      const entries = Array.isArray(payload) ? payload : [payload];
      for (const e of entries) {
        const op = e?.operationName || e?.extensions?.operationName;
        if (op === "bookingAirSearch" && !bookingReq) bookingReq = e;
      }
    } catch {}
  });

  /** Capture GraphQL responses */
  page.on("response", async (res) => {
    try {
      const u = new URL(res.url());
      if (u.pathname !== GRAPHQL_PATH || res.request().method() !== "POST") return;
      const idx = seq;

      const text = await res.text();
      let body;
      try { body = JSON.parse(text); } catch { body = text; }

      const fileRes = path.join(runDir, `${idx}-response.json`);
      writeJsonSafe(fileRes, body);
      appendLog(logFile, `[${new Date().toISOString()}] ${idx}-response`);

      // trace response screens
      if (screens === "trace") {
        await takeScreenshotAuto(page, runDir, `${idx}-trace-response`, logFile, screens);
      }

      if (res.status() === 200) haveAnyGraphQL200 = true;
      if (!firstRes && res.status() === 200) firstRes = body;

      const bag = Array.isArray(body) ? body : [body];
      for (const item of bag) {
        if (item?.data?.bookingAirSearch && !bookingRes) {
          bookingRes = item;
          if (!tookFirstGraphqlShot && (screens === "verbose" || screens === "trace")) {
            tookFirstGraphqlShot = true;
            await takeScreenshotAuto(page, runDir, "first-graphql", logFile, screens);
          }
        }
      }
    } catch {}
  });

  /** main flow */
  async function doFailure() {
    await takeScreenshotAuto(page, runDir, "failure", logFile, screens);
  }

  try {
    // warm VA homepage
    await page.goto("https://www.virginaustralia.com/au/en/", { waitUntil: "domcontentloaded" }).catch(() => {});
    await page.waitForTimeout(200);

    // load SPA route
    await page.goto(bookingUrl, { waitUntil: "domcontentloaded" }).catch(() => {});
    if (screens === "verbose" || screens === "trace") {
      await takeScreenshotAuto(page, runDir, "load", logFile, screens);
    }

    // wait until first graphql call yields 200
    await page.waitForResponse(
      r => r.url().includes(GRAPHQL_PATH) && r.status() === 200,
      { timeout }
    ).catch(() => {});
    await page.waitForLoadState("networkidle", { timeout }).catch(() => {});
    await page.waitForTimeout(300);

    const primaryReq = bookingReq || firstReq;
    const primaryRes = bookingRes || firstRes;
    const latestReq = path.join(outDir, "va_bookingAirSearch.request.json");
    const latestRes = path.join(outDir, "va_bookingAirSearch.response.json");

    if (primaryReq) writeJsonSafe(latestReq, primaryReq);
    if (primaryRes) writeJsonSafe(latestRes, primaryRes);

    if (primaryRes || haveAnyGraphQL200) {
      if (screens === "lite" || screens === "verbose" || screens === "trace") {
        await takeScreenshotAuto(page, runDir, "final", logFile, screens);
      }
      appendLog(logFile, "[done] success");
      console.log(JSON.stringify({
        ok: true,
        origin,
        destination,
        date,
        outDir,
        requestPath: primaryReq ? latestReq : null,
        responsePath: primaryRes ? latestRes : null,
        runDir
      }));
      process.exit(0);
    } else {
      await doFailure();
      appendLog(logFile, "[done] noGraphQL");
      console.error(JSON.stringify({
        ok: false,
        reason: "NoGraphQLSeen",
        runDir
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
