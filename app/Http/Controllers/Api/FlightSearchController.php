<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

use App\Jobs\OrchestrateSearchJob;
use App\Services\Parsers\AaItineraryParser;

class FlightSearchController extends Controller
{
    /**
     * GET /flights
     * Kick off a search and return sid + echo of inputs
     */
    public function start(Request $r)
    {
        $r->validate([
            'origin'      => ['required','string','size:3'],
            'destination' => ['required','string','size:3'],
            'date'        => ['required','date'],
            'pax'         => ['nullable','integer','min:1','max:9'],
            'cabin'       => ['nullable','string'],
            'currency'    => ['nullable','string','size:3'],
        ]);

        $origin      = strtoupper($r->origin);
        $destination = strtoupper($r->destination);
        $date        = $r->date;
        $pax         = (int)($r->pax ?? 1);
        $cabin       = strtoupper($r->cabin ?? 'ECONOMY');
        $currency    = strtoupper($r->currency ?? 'AUD');

        // normalized route (alphabetical A/Z as requested)
        $route = strtoupper($origin.$destination);
        if ($destination < $origin) {
            $route = strtoupper($destination.$origin);
        }

        $sid = (string) Str::uuid();

        // initialize cache envelope
        $payload = [
            'status'   => 'queued',
            'results'  => [],
            'meta'     => compact('origin','destination','route','date','pax','cabin','currency'),
            'progress' => ['total' => 1, 'done' => 0, 'providers' => ['aa' => 'queued']],
        ];
        Cache::put("search:{$sid}", $payload, now()->addMinutes(15));

        // orchestrate (AA first; you can add more later)
        Bus::dispatch(new OrchestrateSearchJob([
            'sid'         => $sid,
            'origin'      => $origin,
            'destination' => $destination,
            'route'       => $route,
            'date'        => $date,
            'pax'         => $pax,
            'cabin'       => $cabin,
            'currency'    => $currency,
            'providers'   => ['aa'],
        ]));

        return response()->json([
            'sid'    => $sid,
            'status' => 'queued',
            'meta'   => $payload['meta'],
        ]);
    }

    /**
     * GET /api/search-status?sid=...
     * Raw polling payload (unchanged from your flow)
     */
    public function status(Request $r)
    {
        $r->validate(['sid' => ['required','uuid']]);

        $payload = Cache::get("search:{$r->sid}");
        if (!$payload) {
            return response()->json(['status' => 'failed', 'error'=>['code'=>'NOT_FOUND']], 404);
        }
        return response()->json($payload);
    }

    /**
     * GET /api/search-results?sid=...
     * Render-ready options: one section per flight option
     *
     * Shape:
     * {
     *   "sid": "...",
     *   "status": "partial|ready|failed",
     *   "meta": {...},
     *   "options": [
     *     {
     *       "id": "trip_id-or-stable-hash",
     *       "provider": "aa",
     *       "class": "ECONOMY",
     *       "points": 10000,
     *       "tax": 24.10,
     *       "currency": "USD",
     *       "duration_min": 95,
     *       "legs": [
     *         {"carrier":"QF","number":"401","from":"SYD","to":"MEL","dep":"06:00","arr":"07:35"}
     *       ],
     *       "summary": "SYD 06:00 → MEL 07:35 · 10,000 pts + USD 24.10"
     *     }, ...
     *   ]
     * }
     */
    public function renderable(Request $r)
    {
        $r->validate(['sid' => ['required','uuid']]);

        $payload = Cache::get("search:{$r->sid}");
        if (!$payload) {
            return response()->json(['status' => 'failed', 'error'=>['code'=>'NOT_FOUND']], 404);
        }

        $meta    = $payload['meta'] ?? [];
        $results = $payload['results'] ?? [];

        // If DB save path produced summaries, transform those
        if (!empty($results)) {
            $options = array_map(function ($row) {
                // if this row is an error summary, surface it plainly
                if (isset($row['error'])) {
                    return [
                        'id'      => 'err-'.md5(json_encode($row)),
                        'error'   => $row['error'],
                        'message' => $row['message'] ?? 'save_failed',
                    ];
                }

                return [
                    'id'           => $row['trip_id'] ?? md5(json_encode($row)),
                    'provider'     => $row['provider'] ?? 'aa',
                    'class'        => $row['class'] ?? 'ECONOMY',
                    'points'       => $row['points'] ?? 0,
                    'tax'          => (float)($row['tax'] ?? 0),
                    'currency'     => $row['currency'] ?? 'USD',
                    'duration_min' => (int)($row['duration_min'] ?? 0),
                    'legs'         => isset($row['legs']) ? $row['legs'] : [], // optional
                    'summary'      => $this->makeSummaryFromSummaryRow($row),
                ];
                \Log::debug('legs ', $row);

            }, $results);

            return response()->json([
                'sid'     => $r->sid,
                'status'  => $payload['status'] ?? 'partial',
                'meta'    => $meta,
                'options' => $options,
            ]);
        }

        // Otherwise, if we only have raw AA bodies in debug, parse on the fly (read-only)
        $bodies = $payload['debug']['aa_itineraries'] ?? [];
        if (!empty($bodies)) {
            /** @var AaItineraryParser $parser */
            $parser  = app(AaItineraryParser::class);
            $offers  = $parser->parseBodies($bodies, [
                'origin'      => $meta['origin']      ?? '',
                'destination' => $meta['destination'] ?? '',
                'date'        => $meta['date']        ?? '',
                'pax'         => $meta['pax']         ?? 1,
                'cabin'       => $meta['cabin']       ?? 'ECONOMY',
                'currency'    => $meta['currency']    ?? 'USD',
                'provider'    => 'aa',
            ]);

            $options = array_map(function ($o) {
                $legs = array_map(function ($f) {
                    return [
                        'carrier' => $f['flight_airline'],
                        'number'  => $f['flight_number'],
                        'from'    => $f['takeoff_iata'],
                        'to'      => $f['landing_iata'],
                        'dep'     => $f['takeoff_time'],
                        'arr'     => $f['landing_time'],
                    ];
                }, $o['flights']);

                return [
                    'id'           => md5(json_encode([$o['trip'], $legs])),
                    'provider'     => $o['provider'],
                    'class'        => $o['trip']['trip_class'],
                    'points'       => $o['trip']['trip_points'],
                    'tax'          => (float)$o['trip']['trip_tax'],
                    'currency'     => $o['currency'],
                    'duration_min' => (int)$o['trip']['trip_duration'],
                    'legs'         => $legs,
                    'summary'      => $this->makeSummaryFromOffer($o, $legs),
                ];
            }, $offers);

            return response()->json([
                'sid'     => $r->sid,
                'status'  => $payload['status'] ?? 'partial',
                'meta'    => $meta,
                'options' => $options,
            ]);
        }

        // Nothing parsed yet; return a thin status (front-end can show loader)
        return response()->json([
            'sid'     => $r->sid,
            'status'  => $payload['status'] ?? 'fetching',
            'meta'    => $meta,
            'options' => [],
        ]);
    }

    // -------- helpers for summaries --------

    private function makeSummaryFromOffer(array $o, array $legs): string
    {
        $first = $legs[0] ?? ['from'=>null,'dep'=>null];
        $last  = $legs[count($legs)-1] ?? ['to'=>null,'arr'=>null];

        $pts = number_format((int)$o['trip']['trip_points']);
        $tax = number_format((float)$o['trip']['trip_tax'], 2);
        $ccy = $o['currency'] ?? 'USD';

        return sprintf(
            '%s %s → %s %s · %s pts + %s %s',
            $first['from'], $first['dep'], $last['to'], $last['arr'], $pts, $ccy, $tax
        );
    }

    private function makeSummaryFromSummaryRow(array $row): string
    {
        $pts = number_format((int)($row['points'] ?? 0));
        $tax = number_format((float)($row['tax'] ?? 0), 2);
        $ccy = $row['currency'] ?? 'USD';
        $dep = trim(($row['takeoff_iata'] ?? '').' '.($row['date'] ?? ''));
        $arr = ($row['landing_iata'] ?? '');

        return sprintf('%s → %s · %s pts + %s %s', $dep, $arr, $pts, $ccy, $tax);
    }
}
