#!/usr/bin/env node
const fs = require("fs");
const path = require("path");

// minimal fetch shim (Node 18+ or node-fetch)
let fetchFn = globalThis.fetch;
if (!fetchFn) {
  try {
    const nf = require("node-fetch");
    fetchFn = nf.default || nf;
  } catch (e) {
    console.error("Fetch not available. Use Node 18+ or install node-fetch.");
    process.exit(1);
  }
}

function arg(name, def) {
  const i = process.argv.indexOf(`--${name}`);
  if (i !== -1 && i + 1 < process.argv.length && !process.argv[i + 1].startsWith("--")) return process.argv[i + 1];
  return def;
}
const flag = (n) => process.argv.includes(`--${n}`);

const url = arg("url");
const userAgent = arg("userAgent", "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36");
const proxyCountry = arg("proxyCountry", "US");
const apiKey = arg("key") || process.env.SCRAPELESS_KEY || process.env.SCRAPELESS_TOKEN;
const out = arg("out", process.cwd());

if (!url) {
  console.error("Usage: --url <targetUrl> [--userAgent <UA>] [--proxyCountry <CC>] [--key <API_KEY>] [--out <dir>]");
  process.exit(2);
}
if (!apiKey) {
  console.error("Provide Scrapeless API key with --key or SCRAPELESS_KEY env var.");
  process.exit(2);
}

const payload = {
  actor: "unlocker.akamaiweb",
  input: {
    type: "cookie",
    url,
    userAgent
  },
  proxy: {
    country: proxyCountry
  }
};

(async () => {
  const ep = "https://api.scrapeless.com/api/v2/unlocker/request";
  const tries = parseInt(arg("tries", "3"), 10);
  const uaCandidates = [
    userAgent,
    "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36",
    "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36"
  ];
  const proxyCandidates = [proxyCountry || "US", "ANY", "UK"];

  for (let attempt = 1; attempt <= tries; attempt++) {
    const tryPayload = {
      actor: "unlocker.akamaiweb",
      input: {
        type: "cookie",
        url,
        userAgent: uaCandidates[(attempt - 1) % uaCandidates.length]
      },
      proxy: { country: proxyCandidates[(attempt - 1) % proxyCandidates.length] }
    };
    console.log(`[unlocker] attempt ${attempt}/${tries} payload UA=${tryPayload.input.userAgent} proxy=${tryPayload.proxy.country}`);
    try {
      const res = await fetchFn(ep, {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          "x-api-token": apiKey
        },
        body: JSON.stringify(tryPayload),
      });
      const text = await res.text();
      let json;
      try { json = JSON.parse(text); } catch { json = { raw: text }; }
      const dbg = { status: res.status, body: json };
      const outFile = path.join(out, `unlocker.attempt-${attempt}.json`);
      fs.writeFileSync(outFile, JSON.stringify(dbg, null, 2), "utf8");
      console.log(`[unlocker] response saved to ${outFile} status=${res.status}`);
      if (res.ok && (json.result?.cookies || json.data?.cookies || json.cookies)) {
        // success path (same as before)
        // ...
        process.exit(0);
      } else {
        console.warn(`[unlocker] attempt ${attempt} failed: ${JSON.stringify(json).slice(0, 400)}`);
      }
    } catch (e) {
      console.error(`[unlocker] request exception: ${e.message || e}`);
    }
    // small backoff
    await new Promise((r) => setTimeout(r, attempt * 1000));
  }
  console.error("[unlocker] all attempts failed — inspect unlocker.*.json files and contact Scrapeless support if needed");
  process.exit(1);
})();