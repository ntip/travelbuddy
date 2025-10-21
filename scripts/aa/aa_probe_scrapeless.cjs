#!/usr/bin/env node
/**
 * AA probe via Scrapeless (puppeteer-core)
 *
 * Usage:
 *   SCRAPELESS_TOKEN=sk_... node scripts\aa\aa_probe_scrapeless.cjs --from SYD --to LAX --date 2026-02-07
 * or
 *   node scripts\aa\aa_probe_scrapeless.cjs --token sk_... --from SYD --to LAX --date 2026-02-07
 */

const puppeteer = require("puppeteer-core");
const { URLSearchParams } = require("url");
const path = require("path");
const fs = require("fs");

function arg(name, def) {
  const i = process.argv.indexOf(`--${name}`);
  if (i !== -1 && i + 1 < process.argv.length && !process.argv[i + 1].startsWith("--")) return process.argv[i + 1];
  return def;
}
const flag = (n) => process.argv.includes(`--${n}`);

(async () => {
  const from = arg("from", "SYD");
  const to = arg("to", "LAX");
  const date = arg("date", "2026-02-07");
  const timeout = parseInt(arg("timeout", "120000"), 10);
  const skipWarm = flag("skipWarm");
  const token = arg("token") || process.env.SCRAPELESS_TOKEN;
  const proxyCountry = arg("proxyCountry", "ANY");
  const sessionName = arg("sessionName", "AA Probe");

  if (!token) {
    console.error("Provide SCRAPELESS_TOKEN env or --token argument.");
    process.exit(2);
  }

  const qs = new URLSearchParams({
    token,
    proxyCountry,
    sessionRecording: "true",
    sessionTTL: "900",
    sessionName,
  });
  const connectionURL = `wss://browser.scrapeless.com/api/v2/browser?${qs.toString()}`;
  console.log("[scrapeless] connect url:", connectionURL.replace(/(token=)[^&]+/, "$1<redacted>"));

  const deepLink = (() => {
    const u = new URL("https://www.aa.com/booking/search");
    u.searchParams.set("type", "OneWay");
    u.searchParams.set("searchType", "Award");
    u.searchParams.set("from", from);
    u.searchParams.set("to", to);
    u.searchParams.set("pax", "1");
    u.searchParams.set("adult", "1");
    u.searchParams.set("cabin", "");
    u.searchParams.set("locale", "en_US");
    u.searchParams.set("nearbyAirports", "true");
    u.searchParams.set("depart", date);
    u.searchParams.set("carriers", "ALL");
    u.searchParams.set("pos", "US");
    return u.toString();
  })();

  let browser;
  try {
    browser = await puppeteer.connect({
      browserWSEndpoint: connectionURL,
      defaultViewport: { width: 1400, height: 860 },
    });
  } catch (e) {
    console.error("[scrapeless] connect failed:", e.message || e);
    process.exit(1);
  }

  const page = await browser.newPage();
  page.setDefaultTimeout(timeout);

  // Optional: load cookies produced by scrapeless unlocker and set them on the page
  try {
    const ckPath = path.resolve(process.cwd(), "cookies.json"); // or full path to unlocker output file
    if (fs.existsSync(ckPath)) {
      const raw = JSON.parse(fs.readFileSync(ckPath, "utf8"));
      // transform unlocker cookie shape to puppeteer CookieParam if needed
      const mapped = raw.map(c => ({
        name: c.name || c.key || c.n,
        value: c.value || c.v,
        domain: c.domain || new URL(deepLink).hostname,
        path: c.path || "/",
        httpOnly: !!c.httpOnly,
        secure: !!c.secure,
        expires: c.expires || undefined
      }));
      if (mapped.length) {
        await page.setCookie(...mapped);
        console.log(`[probe] applied ${mapped.length} unlocker cookies from ${ckPath}`);
      }
    }
  } catch (e) {
    console.warn("[probe] failed to load/apply unlocker cookies:", e?.message || e);
  }

  // Strip problematic headers (upgrade-insecure-requests etc.)
  await page.setRequestInterception(true);
  page.on("request", (req) => {
    try {
      const headers = Object.assign({}, req.headers());
      if (headers["upgrade-insecure-requests"]) delete headers["upgrade-insecure-requests"];
      // optionally strip client hints if needed:
      // delete headers["sec-ch-ua"]; delete headers["sec-ch-ua-mobile"]; delete headers["sec-ch-ua-platform"];
      req.continue({ headers });
    } catch (e) {
      try { req.continue(); } catch {}
    }
  });

  // Anti-detection init
  await page.evaluateOnNewDocument(() => {
    try {
      Object.defineProperty(navigator, "webdriver", { get: () => undefined });
    } catch {}
    try {
      Object.defineProperty(navigator, "languages", { get: () => ["en-US", "en"] });
    } catch {}
    try {
      Object.defineProperty(navigator, "plugins", { get: () => [1, 2, 3] });
    } catch {}
    try { window.chrome = window.chrome || { runtime: {} }; } catch {}
  });

  // Log page console and errors
  page.on("console", (msg) => console.log(`[page:${msg.type()}] ${msg.text()}`));
  page.on("pageerror", (e) => console.error("[pageerror]", e.message || e));

  // Observe AA booking APIs
  const API_PREFIX = "/booking/api/search/";
  page.on("response", async (res) => {
    try {
      if (res.url().includes(API_PREFIX)) {
        console.log(`[AA] ${res.url()} -> ${res.status()}`);
      }
    } catch {}
  });

  try {
    if (!skipWarm) {
      console.log("[probe] warm homepage…");
      await page.goto("https://www.aa.com/", { waitUntil: "domcontentloaded" });

      // Accept consent if present (simple: click on known id if exists)
      try {
        const accept = await page.$("#onetrust-accept-btn-handler");
        if (accept) {
          await accept.click({ delay: 60 });
          console.log("[probe] consent accepted (#onetrust-accept-btn-handler)");
        }
      } catch (e) { /* ignore */ }

      // portable sleep (some puppeteer connections don't expose waitForTimeout)
      await sleep(500);
    } else {
      console.log("[probe] skipping warm homepage; going direct to deep link");
    }

    console.log("[probe] navigate deep link…");
    await page.goto(deepLink, { waitUntil: "domcontentloaded" });

    // Wait for booking API to fire (best-effort)
    try {
      await page.waitForResponse((r) => r.url().includes(API_PREFIX), { timeout });
      console.log("[probe] booking API observed");
    } catch {
      console.log("[probe] no booking API response within timeout");
    }

    await sleep(1000);
    console.log("[probe] done; closing session.");
  } catch (e) {
    console.error("[fatal]", e?.message || e);
  } finally {
    try { await page.close(); } catch {}
    try { await browser.disconnect(); } catch {}
    process.exit(0);
  }
})();