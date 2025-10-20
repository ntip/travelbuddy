#!/usr/bin/env node
/**
 * VA Award Search (stable diagnostic build)
 * - Hash routing fixed (#/flight-selection?...).
 * - Captures ALL POST /api/graphql requests/responses (numbered).
 * - Picks bookingAirSearch as PRIMARY if present, else falls back to first GraphQL pair.
 * - Overwrites latest files and archives each run.
 */
const fs = require("fs");
const path = require("path");
const { chromium } = require("playwright");

function arg(name, def) {
  const i = process.argv.indexOf(`--${name}`);
  if (i !== -1 && i + 1 < process.argv.length && !process.argv[i + 1].startsWith("--")) return process.argv[i + 1];
  return def;
}
const flag = (name) => process.argv.includes(`--${name}`);
function ensureDir(p) { try { fs.mkdirSync(p, { recursive: true }); } catch {} }
async function writeJson(file, obj) {
  try { fs.writeFileSync(file, JSON.stringify(obj, null, 2), "utf-8"); } catch {}
}

(async () => {
  const origin = arg("origin");
  const destination = arg("destination");
  const date = arg("date");
  if (!origin || !destination || !date) {
    console.error("Missing required args. Example: --origin SIN --destination BNE --date 02-02-2026");
    process.exit(1);
  }

  const headful = flag("headful");
  const debug = flag("debug");
  const outDir = arg("out", "storage/app/travelbuddy");
  const timeout = parseInt(arg("timeout", "120000"), 10);
  const proxy = arg("proxy", null);

  ensureDir(outDir);
  const userDataDir = path.resolve("scripts/.pw-state");

  const launchCommon = {
    headless: !headful,
    args: ["--headless=new", "--no-sandbox", "--disable-dev-shm-usage", "--disable-blink-features=AutomationControlled"],
  };
  if (proxy) launchCommon.proxy = { server: proxy };

  // Build hash-based URL (route+query in the fragment)
  const base = new URL("https://book.virginaustralia.com/dx/VADX/");
  const hash = [
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
  base.hash = hash;
  const bookingUrl = base.toString();

  let context;
  try {
    context = await chromium.launchPersistentContext(userDataDir, {
      ...launchCommon,
      channel: "chrome",
      userAgent:
        "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36",
      locale: "en-AU",
      timezoneId: "Australia/Brisbane",
      viewport: { width: 1400, height: 860 },
      ignoreHTTPSErrors: true,
      extraHTTPHeaders: {
        "Accept-Language": "en-AU,en;q=0.9",
        "Referer": "https://www.virginaustralia.com/au/en/",
      },
    });
  } catch {
    context = await chromium.launchPersistentContext(userDataDir, {
      ...launchCommon,
      userAgent:
        "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36",
      locale: "en-AU",
      timezoneId: "Australia/Brisbane",
      viewport: { width: 1400, height: 860 },
      ignoreHTTPSErrors: true,
      extraHTTPHeaders: {
        "Accept-Language": "en-AU,en;q=0.9",
        "Referer": "https://www.virginaustralia.com/au/en/",
      },
    });
  }

  const page = await context.newPage();
  page.setDefaultTimeout(timeout);
  page.on("console", (m) => console.log(`[page:${m.type()}] ${m.text()}`));
  page.on("pageerror", (e) => console.error("[pageerror]", e.message));
  await page.addInitScript(() => {
    Object.defineProperty(navigator, "webdriver", { get: () => undefined });
    const f = () => ({ length: 1, item: () => ({}) });
    try { Object.defineProperty(navigator, "plugins", { get: f }); Object.defineProperty(navigator, "mimeTypes", { get: f }); } catch {}
    // eslint-disable-next-line no-undef
    window.chrome = window.chrome || { runtime: {} };
  });

  const GRAPHQL_PATH = "/api/graphql";
  let seq = 0;

  // Primary (bookingAirSearch) if found:
  let bookingReq = null;
  let bookingRes = null;

  // Fallback to the first seen GraphQL pair:
  let firstReq = null;
  let firstRes = null;
  let haveAnyGraphQL200 = false;

  page.on("request", (req) => {
    try {
      const u = new URL(req.url());
      if (u.pathname !== GRAPHQL_PATH || req.method() !== "POST") return;
      const post = req.postData();
      const payload = (() => { try { return JSON.parse(post || "null"); } catch { return post || null; } })();
      const idx = ++seq;
      writeJson(path.join(outDir, `graphql-req-${idx}.json`), { url: req.url(), headers: req.headers(), payload });

      if (!firstReq) firstReq = payload;

      // detect bookingAirSearch in request (batch or single)
      const entries = Array.isArray(payload) ? payload : [payload];
      for (const e of entries) {
        const op = e?.operationName || e?.extensions?.operationName || null;
        if (op === "bookingAirSearch" && !bookingReq) bookingReq = e;
      }
    } catch {}
  });

  page.on("response", async (res) => {
    try {
      const u = new URL(res.url());
      if (u.pathname !== GRAPHQL_PATH || res.request().method() !== "POST") return;

      const status = res.status();
      const text = await res.text().catch(() => "");
      const body = (() => { try { return JSON.parse(text); } catch { return text; } })();

      writeJson(path.join(outDir, `graphql-res-${seq}.json`), { status, body });

      if (status === 200) haveAnyGraphQL200 = true;
      if (!firstRes && status === 200) firstRes = body;

      // detect bookingAirSearch in response body (batch or single)
      const bag = Array.isArray(body) ? body : [body];
      for (const item of bag) {
        const data = item && item.data;
        if (data && Object.prototype.hasOwnProperty.call(data, "bookingAirSearch") && !bookingRes) {
          bookingRes = item;
        }
      }
    } catch {}
  });

  async function snap(tag) {
    try { await page.screenshot({ path: path.join(outDir, `${tag}.png`), fullPage: true }); } catch {}
  }

  try {
    if (debug) console.log("[dbg] bookingUrl =", bookingUrl);

    // Warm homepage (mirrors manual flow)
    await page.goto("https://www.virginaustralia.com/au/en/", { waitUntil: "domcontentloaded" }).catch(() => {});
    await page.waitForTimeout(250);

    // Go to booking route
    await page.goto(bookingUrl, { waitUntil: "domcontentloaded", referer: "https://www.virginaustralia.com/au/en/" });

    // Wait for any 200 GraphQL to land, then a short idle
    await page.waitForResponse(
      (r) => r.request().method() === "POST" && r.url().includes("/api/graphql") && r.status() === 200,
      { timeout }
    ).catch(() => {});
    await page.waitForLoadState("networkidle", { timeout }).catch(() => {});
    await page.waitForTimeout(1000);

    // Choose primary data
    const primaryReq = bookingReq || firstReq;
    const primaryRes = bookingRes || firstRes;

    // WRITE OUTPUTS (overwrite latest + archive a run)
    const outDirAbs = path.resolve(outDir);
    ensureDir(outDirAbs);
    const tsSafe = new Date().toISOString().replace(/[:.]/g, "-");
    const runDir = path.join(outDirAbs, `run-${tsSafe}`);
    ensureDir(runDir);

    const latestReqPath = path.join(outDirAbs, "va_bookingAirSearch.request.json");
    const latestResPath = path.join(outDirAbs, "va_bookingAirSearch.response.json");

    if (primaryReq) {
      await writeJson(latestReqPath, primaryReq);
      await writeJson(path.join(runDir, "va_bookingAirSearch.request.json"), primaryReq);
    }
    if (primaryRes) {
      await writeJson(latestResPath, primaryRes);
      await writeJson(path.join(runDir, "va_bookingAirSearch.response.json"), primaryRes);
    }

    if (primaryRes || haveAnyGraphQL200) {
      console.log(JSON.stringify({
        ok: true,
        note: bookingRes ? "bookingAirSearch captured" : "GraphQL captured (fallback to first pair)",
        origin, destination, date,
        outDir: outDirAbs,
        requestPath: latestReqPath,
        responsePath: latestResPath,
        runDir
      }));
      process.exit(0);
    } else {
      await snap("failure");
      console.error(JSON.stringify({
        ok: false,
        reason: "NoGraphQLSeen",
        hint: "Check graphql-*.json files and failure.png. Try headed once; ensure no local proxy/AV is blocking.",
      }));
      process.exit(1);
    }
  } catch (e) {
    await snap("failure");
    console.error("[error]", e?.message || e);
    process.exit(1);
  } finally {
    await context.close().catch(() => {});
  }
})();
