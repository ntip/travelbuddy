// aa_award_search.js
// Simple Playwright script: login, run an award search, extract displayed award results.
// NOTE: update USERNAME/PASSWORD and the selectors below if AA changes their UI.

const { chromium } = require('playwright');
const fs = require('fs');

const AA_LOGIN_URL = 'https://www.aa.com/login'; // landing login
const AA_AWARD_SEARCH_URL = (from,to,date) =>
  `https://www.aa.com/booking/search?type=OneWay&searchType=Award&from=${from}&to=${to}&pax=1&adult=1&date=${date}`;

const USERNAME = process.env.AA_USER || 'youremail@example.com';
const PASSWORD = process.env.AA_PASS || 'yourpassword';

(async () => {
  const browser = await chromium.launch({ headless: false }); // headful for reliability
  const context = await browser.newContext({
    viewport: { width: 1280, height: 900 },
    userAgent: 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120 Safari/537.36'
  });

  // persist session cookies to disk for reuse:
  const storagePath = './aa-session.json';
  if (fs.existsSync(storagePath)) {
    const state = JSON.parse(fs.readFileSync(storagePath, 'utf8'));
    await context.addCookies(state.cookies || []);
  }

  const page = await context.newPage();

  // 1) Login (only if not already logged-in)
  await page.goto(AA_LOGIN_URL, { waitUntil: 'domcontentloaded' });
  // If the site is already logged in, you may find a profile element - adjust detection accordingly.
  const loggedIn = await page.$('a[href*="/profile"]') || await page.$('text=Sign out');
  if (!loggedIn) {
    // adjust selectors if AA changed them
    await page.fill('input[name="username"], input[type="email"]', USERNAME).catch(()=>{});
    await page.fill('input[name="password"], input[type="password"]', PASSWORD).catch(()=>{});
    // click sign-in button
    await Promise.all([
      page.waitForNavigation({ waitUntil: 'networkidle' }),
      page.click('button[type="submit"], text=Sign in').catch(()=>{})
    ]);
    // Save cookies
    const cookies = await context.cookies();
    fs.writeFileSync(storagePath, JSON.stringify({ cookies }, null, 2));
  } else {
    console.log('Already logged in (or profile element detected).');
  }

  // 2) Go to award search URL (example SYD -> LAX date format YYYY-MM-DD)
  const from = 'SYD'; const to = 'LAX'; const date = '2026-01-07';
  const searchUrl = AA_AWARD_SEARCH_URL(from, to, date);
  await page.goto(searchUrl, { waitUntil: 'networkidle' });

  // 3) Wait for results area - update selector to match AA's results container
  // You should inspect the live DOM and replace selectors below
  await page.waitForTimeout(2000);
  try {
    await page.waitForSelector('.award-results, .resultsList, [data-test="search-results"]', { timeout: 15000 });
  } catch (e) {
    console.warn('Search results container not found — site may present a verification or changed markup.', e.message);
    await browser.close();
    return;
  }

  // 4) Extract results: example DOM traversal - adapt to real AA markup
  const flights = await page.$$eval('.flight-row, .result-row, [data-test="flight-row"]', rows => {
    return rows.map(r => {
      const depart = r.querySelector('.departure')?.textContent?.trim() || r.querySelector('.dep')?.textContent?.trim() || null;
      const arrive = r.querySelector('.arrival')?.textContent?.trim() || r.querySelector('.arr')?.textContent?.trim() || null;
      const cabin = r.querySelector('.cabin-class')?.textContent?.trim() || null;
      const miles = r.querySelector('.award-price, .miles')?.textContent?.trim() || null;
      return { depart, arrive, cabin, miles };
    });
  });

  console.log('Flights found:', flights.length);
  console.log(JSON.stringify(flights, null, 2));

  // Save to file
  fs.writeFileSync(`aa-awards-${from}-${to}-${date}.json`, JSON.stringify(flights, null, 2));

  await browser.close();
})();
