<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

use App\Services\OxylabsClient;
use App\Services\TripSaver;
use App\Services\Parsers\AaItineraryParser;
use App\Services\Providers\AaProvider;

use Throwable;

class ProviderFetchJob implements ShouldQueue
{
    use Queueable;

    /** Give slow scrapes time */
    public $timeout = 180;
    public $tries   = 1;

    public function __construct(public array $params) {}

    public function handle(OxylabsClient $client, TripSaver $saver): void
    {
        $sid         = $this->params['sid'];
        $prov        = $this->params['provider'];
        $route       = $this->params['route'];
        $date        = $this->params['date'];
        $pax         = $this->params['pax'];
        $cabin       = $this->params['cabin'];
        $origin      = $this->params['origin'];
        $destination = $this->params['destination'];
        $currency    = $this->params['currency'] ?? config('travelbuddy.currency', 'AUD');

        $this->updateProgress($sid, $prov, 'fetching');
        Log::info('ProviderFetchJob start', compact('sid','prov','origin','destination','date'));

        try {
            if ($prov === 'aa') {
                $provider = new AaProvider();

                // 1) POST /queries (Realtime)
                $queriesResp = $client->postQueries($provider->buildRequest([
                    'origin' => $origin, 'destination' => $destination, 'date' => $date, 'pax' => $pax, 'cabin' => $cabin,
                ]));

                // 2) Inline first (deep scan included in provider)
                $bodies    = $provider->extractItineraryBodiesFromInline($queriesResp);
                $fetchPath = 'inline';

                // 3) Resolve queryId from multiple places (id, request_id, results[0].*, job.id)
                $queryId = (string)(
                    $queriesResp['id']
                    ?? $queriesResp['request_id']
                    ?? ($queriesResp['results'][0]['id'] ?? null)
                    ?? ($queriesResp['results'][0]['task_id'] ?? null)
                    ?? ($queriesResp['results'][0]['job_id'] ?? null)
                    ?? ($queriesResp['job']['id'] ?? null)
                    ?? ''
                );

                // 4) ALWAYS try Data API as well (force it) and keep a trace of attempts
                $attempts = [];
                if ($queryId !== '') {
                    $types = ['xhr','content','network','raw','requests'];
                    $found = [];
                    for ($idx = 0; $idx <= 4 && empty($found); $idx++) {
                        foreach ($types as $typ) {
                            $attempts[] = "{$typ}#{$idx}";
                            try {
                                // NOTE: OxylabsClient::getResultContent MUST honor $resultIndex (no hardcoded 1)
                                $pack = $client->getResultContent($queryId, $idx, $typ);
                                $tryBodies = $provider->extractItineraryBodies($pack);
                                if (!empty($tryBodies)) {
                                    $found = $tryBodies;
                                    $fetchPath = "data_api:{$typ}#{$idx}";
                                    break 2; // success
                                }
                            } catch (Throwable $e) {
                                // ignore and continue trying others
                            }
                        }
                    }
                    if (!empty($found)) {
                        // Prefer Data API bodies (these worked reliably for your account)
                        $bodies = $found;
                    }
                }

                // For debugging: surface what we tried
                $diag = [
                    'query_id'     => $queryId ?: '(none)',
                    'attempts'     => $attempts,
                    'inline_count' => is_countable($bodies) ? count($bodies) : null,
                ];

                // 5) Parse itinerary bodies -> normalized offers (never break job)
                $offers = [];
                try {
                    $offers = app(AaItineraryParser::class)->parseBodies(
                        $bodies,
                        [
                            'origin'      => $origin,
                            'destination' => $destination,
                            'date'        => $date,
                            'pax'         => $pax,
                            'cabin'       => $cabin,
                            'currency'    => $currency,
                            'provider'    => 'aa',
                        ]
                    );
                } catch (Throwable $e) {
                    Log::error('AA parser failed', ['sid' => $sid, 'err' => $e->getMessage()]);
                    $offers = [];
                }

                // 6) Persist to DB and collect lightweight summaries (non-fatal)
                $summaries = [];
                try {
                    $summaries = $saver->saveMany($sid, [
                        'origin'      => $origin,
                        'destination' => $destination,
                        'route'       => $route,
                        'date'        => $date,
                        'pax'         => $pax,
                        'cabin'       => $cabin,
                        'provider'    => 'aa',
                        'source'      => 'oxylabs',
                        'currency'    => $currency,
                    ], $offers);
                } catch (Throwable $e) {
                    Log::error('TripSaver failed', ['sid' => $sid, 'err' => $e->getMessage()]);
                    $summaries = [];
                }

                // 7) Build cache payload for poller
                $payload = $this->getPayload($sid);
                $payload['status'] = 'partial';
                $payload['meta'] = array_merge($payload['meta'] ?? [], [
                    'origin'        => $origin,
                    'destination'   => $destination,
                    'route'         => $route,
                    'date'          => $date,
                    'pax'           => $pax,
                    'cabin'         => $cabin,
                    'currency'      => $currency,
                    'fetched_at'    => now()->toIso8601String(),
                    'aa_fetch_path' => $fetchPath ?? 'unknown',
                ]);
                // keep raw bodies for now (handy while iterating)
                $payload['debug']['aa_itineraries'] = $bodies;
                $payload['debug']['aa_diag']        = $diag;
                // append saved summaries to results
                $payload['results'] = array_values(array_merge($payload['results'] ?? [], $summaries));

                $payload['progress']['providers'][$prov] = 'ready';
                $payload['progress']['done'] = ($payload['progress']['done'] ?? 0) + 1;

                Cache::put("search:{$sid}", $payload, now()->addMinutes(15));
                return;
            }

            // ----- other providers would go here (va/ey/etc) -----

            // If unknown provider:
            throw new \InvalidArgumentException("Provider not implemented: {$prov}");

        } catch (Throwable $e) {
            Log::error('ProviderFetchJob error', ['sid' => $sid, 'prov' => $prov, 'msg' => $e->getMessage()]);

            $payload = $this->getPayload($sid);
            $payload['errors'][] = ['provider' => $prov, 'message' => $e->getMessage()];
            $payload['progress']['providers'][$prov] = 'failed';
            $payload['progress']['done'] = ($payload['progress']['done'] ?? 0) + 1;
            $payload['status'] = 'partial';

            Cache::put("search:{$sid}", $payload, now()->addMinutes(10));
        }
    }

    // -------- helpers --------

    private function updateProgress(string $sid, string $prov, string $state): void
    {
        $payload = Cache::get("search:{$sid}");

        if (!$payload) {
            $payload = [
                'status'   => 'fetching',
                'results'  => [],
                'meta'     => [],
                'progress' => ['total' => 1, 'done' => 0, 'providers' => []],
            ];
        }

        if (!isset($payload['progress'])) {
            $payload['progress'] = ['total' => 1, 'done' => 0, 'providers' => []];
        }
        if (!isset($payload['progress']['providers'])) {
            $payload['progress']['providers'] = [];
        }

        $payload['progress']['providers'][$prov] = $state;
        $payload['progress']['touched_at'] = now()->toIso8601String();

        if ($state === 'fetching') {
            $payload['status'] = 'fetching';
        }

        Cache::put("search:{$sid}", $payload, now()->addMinutes(5));
    }

    private function getPayload(string $sid): array
    {
        $payload = Cache::get("search:{$sid}");
        if ($payload) return $payload;

        return [
            'status'   => 'fetching',
            'results'  => [],
            'meta'     => [],
            'progress' => ['total' => 1, 'done' => 0, 'providers' => []],
        ];
    }
}
