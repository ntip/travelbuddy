#!/usr/bin/env node
const fs = require("fs");
const path = require("path");

// minimal fetch shim: use global fetch (Node 18+) or node-fetch if installed
let fetchFn = globalThis.fetch;
if (!fetchFn) {
  try {
    // node-fetch v2/v3 compatibility
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

const from = arg("from");
const to = arg("to");
const date = arg("date");
const outRoot = arg("out", "storage/app/travelbuddy");
const apiKey = arg("key") || process.env.SCRAPELESS_KEY;
const endpoint = arg("endpoint") || process.env.SCRAPELESS_ENDPOINT;

if (!from || !to || !date) {
  console.error("Usage: --from <ORIGIN> --to <DEST> --date <YYYY-MM-DD> [--out <outDir>] [--key <API_KEY>] [--endpoint <URL>]");
  process.exit(2);
}
if (!apiKey || !endpoint) {
  console.error("Provide Scrapeless credentials: SCRAPELESS_KEY and SCRAPELESS_ENDPOINT env vars or --key and --endpoint args.");
  process.exit(2);
}

const runId = new Date().toISOString().replace(/[:.]/g, "-");
const runDir = path.join(outRoot, `run-${runId}`, "aa");
fs.mkdirSync(runDir, { recursive: true });

const searchUrl = `https://www.aa.com/booking/search?type=OneWay&searchType=Award&from=${encodeURIComponent(from)}&to=${encodeURIComponent(to)}&pax=1&adult=1&cabin=&locale=en_US&nearbyAirports=true&depart=${encodeURIComponent(date)}&carriers=ALL&pos=US`;

async function main() {
  const payload = {
    // generic payload; adapt to your Scrapeless API schema if different
    url: searchUrl,
    render: true,
    waitFor: "networkidle", // optional - depends on API
    // you can add headers or other options here if supported by your endpoint
  };

  console.log("[info] sending scrape request to scrapeless endpoint");
  try {
    const res = await fetchFn(endpoint, {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
        "Authorization": `Bearer ${apiKey}`,
      },
      body: JSON.stringify(payload),
      // timeout or other fetch options may be supported by your fetch implementation
    });

    const text = await res.text();
    let json;
    try { json = JSON.parse(text); } catch { json = { raw: text }; }

    const outFile = path.join(runDir, "scrapeless.response.json");
    fs.writeFileSync(outFile, JSON.stringify({ status: res.status, body: json }, null, 2), "utf8");
    console.log(`[done] response saved to ${outFile} (status=${res.status})`);

    // Also write the original request metadata
    const reqFile = path.join(runDir, "scrapeless.request.json");
    fs.writeFileSync(reqFile, JSON.stringify({ url: searchUrl, payload }, null, 2), "utf8");

    // print minimal result to stdout for calling scripts
    console.log(JSON.stringify({ ok: res.ok, status: res.status, runDir }));
    process.exit(res.ok ? 0 : 1);
  } catch (e) {
    const errFile = path.join(runDir, "scrapeless.error.txt");
    fs.writeFileSync(errFile, String(e), "utf8");
    console.error("[error] request failed:", e.message || e);
    process.exit(1);
  }
}

main();