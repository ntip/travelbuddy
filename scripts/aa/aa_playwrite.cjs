// open_aa_playwright.js
// Usage: node open_aa_playwright.js "https://book.aa.com/..." [--profile ./profile]
// Requires: npm i playwright

const { chromium } = require('playwright');
const fs = require('fs');
const path = require('path');

(async () => {
  const url = process.argv[2] || 'https://www.aa.com/';
  const profileArgIndex = process.argv.indexOf('--profile');
  const userDataDir = profileArgIndex !== -1 ? process.argv[profileArgIndex + 1] : path.resolve(__dirname, 'playwright-profile');

  // Ensure profile folder exists
  fs.mkdirSync(userDataDir, { recursive: true });

  console.log(`Launching Chrome with profile at ${userDataDir}`);
  console.log(`Open URL: ${url}`);
  console.log('Tip: complete any login / allow steps in the opened browser. When done, return here and press ENTER to save cookies.');

  // Launch persistent context so cookies/localStorage persist
  const context = await chromium.launchPersistentContext(userDataDir, {
    headless: false,          // visible browser
    channel: 'chrome',        // try to use system Chrome (falls back)
    args: ['--start-maximized'],
    viewport: null
  });

  const page = await context.newPage();
  await page.goto(url, { waitUntil: 'domcontentloaded' });

  // Open devtools if you want:
  // await page.evaluate(() => { debugger; });

  // Wait for user to hit ENTER in terminal to save current cookies
  await new Promise(resolve => {
    process.stdin.resume();
    console.log('\nPress ENTER when you want the script to export cookies & localStorage and exit.');
    process.stdin.on('data', async () => {
      try {
        const cookies = await context.cookies();
        fs.writeFileSync(path.join(userDataDir, 'cookies.json'), JSON.stringify(cookies, null, 2));
        console.log('Saved cookies to', path.join(userDataDir, 'cookies.json'));

        // Save localStorage for the origin (optional)
        const origin = new URL(url).origin;
        const storage = await page.evaluate((origin) => {
          const res = {};
          for (let i = 0; i < localStorage.length; i++) {
            const k = localStorage.key(i);
            res[k] = localStorage.getItem(k);
          }
          return res;
        }, origin);
        fs.writeFileSync(path.join(userDataDir, 'localStorage.json'), JSON.stringify(storage, null, 2));
        console.log('Saved localStorage to', path.join(userDataDir, 'localStorage.json'));
      } catch (err) {
        console.error('Error saving session:', err);
      }
      resolve();
      process.exit(0);
    });
  });

  // Note: script will exit after ENTER is pressed
})();
