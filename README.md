## About travelBuddy

Project -> Build a "Reward Flight" search engine - with advance features (Multi-hop, alert, history, ect) with view to potentially monnitize via subscription / adds / afiliates* (Hotels / data?)

## Flight jSon example

## MVP Progress (TravelBuddy – VA Award Scraper)

### ✅ Implemented
- Laravel `va:award-search` Artisan command (console entrypoint)
- Node headless scraper using Playwright (persistent login state)
- Automatic deep-link generation using origin/destination/date
- GraphQL interception and capture
- Primary + fallback detection (`bookingAirSearch` → fallback first seen op)
- Incremental JSON capture + archival:

Example Output:
storage/app/travelbuddy/
├─ va_bookingAirSearch.request.json ← latest (always overwritten)
├─ va_bookingAirSearch.response.json ← latest (always overwritten)
└─ run-2025-.../
├─ 1-request.json
├─ 1-response.json
├─ 2-request.json
├─ 2-response.json
└─ log.txt


---

### ✅ Usage (Console Examples)

#### Basic search
```bash
php artisan va:award-search --origin=SIN --destination=BNE --date=02-03-2026
With more time for slow loading routes
bash
Copy code
php artisan va:award-search --origin=SIN --destination=BNE --date=02-03-2026 --timeout=15000
With node debug logs visible
bash
Copy code
php artisan va:award-search --origin=SIN --destination=BNE --date=02-03-2026 --debug
Running Node script directly (bypassing Artisan)
bash
Copy code
node scripts/va/va_award_search.cjs --origin SIN --destination BNE --date 02-03-2026 --timeout 15000


### 🚧 In Progress
| Feature | Status |
|--------|--------|
| Screenshot support (`--screens=verbose|trace`) | ❌ not working |
| Success/final screenshot persistence | ❌ not working |
| CLI trace screenshot mode | ❌ not working |  
| Refactor: buffered screenshot sequencing | ❌ currently under revision |

### 🧩 Known Issue (Screenshots)
The current implementation hooks screenshot capture inside Playwright
network event listeners. These callbacks are **not awaited**, and Playwright
may drop them if execution finishes early — meaning no screenshot files are
actually produced.

Solution approach is to:
1. Capture only flags in listener
2. Perform actual screenshots inside main awaited flow
3. Guarantee capture timing before early exit

### ✅ Next Steps
- Reintroduce screenshot hooks safely (buffered, not inline)
- Validate screenshot timing with very short timeouts (6–8s)
- Once stable, move to parsing of bookingAirSearch response into simplified JSON
- Integration with Laravel API layer

---

