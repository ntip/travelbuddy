<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use App\Jobs\OrchestrateSearchJob;

class FlightsPageController extends Controller
{
    public function index() { return view('travelbuddy.flights.index'); }

    // starts the job server-side and renders the loading view with $sid
    public function status(Request $r)
    {
        $data = $r->validate([
            'origin' => ['required','string','size:3'],
            'destination' => ['required','string','size:3'],
            'date' => ['required','date'],
            'pax' => ['nullable','integer','min:1','max:9'],
            'cabin' => ['nullable','string'],
            'currency' => ['nullable','string','size:3'],
        ]);

        $origin = strtoupper($data['origin']);
        $destination = strtoupper($data['destination']);
        $date = $data['date'];
        $pax = (int)($data['pax'] ?? 1);
        $cabin = strtoupper($data['cabin'] ?? 'ECONOMY');
        $currency = strtoupper($data['currency'] ?? 'AUD');
        $route = $destination < $origin ? $destination.$origin : $origin.$destination;

        $sid = (string) Str::uuid();

        Cache::put("search:{$sid}", [
            'status' => 'queued',
            'results' => [],
            'meta' => compact('origin','destination','route','date','pax','cabin','currency'),
            'progress' => ['total' => 1, 'done' => 0, 'providers' => ['aa' => 'queued']],
        ], now()->addMinutes(15));

        Bus::dispatch(new OrchestrateSearchJob([
            'sid' => $sid,
            'origin' => $origin,
            'destination' => $destination,
            'route' => strtoupper($route),
            'date' => $date,
            'pax' => $pax,
            'cabin' => $cabin,
            'currency' => $currency,
            'providers' => ['aa'],
        ]));

        return view('travelbuddy.flights.status', compact('sid'));
    }

    public function results(Request $r)
    {
        $r->validate(['sid' => ['required','uuid']]);
        return view('travelbuddy.flights.results', ['sid' => $r->sid]);
    }
}
