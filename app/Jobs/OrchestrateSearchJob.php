<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Cache;

class OrchestrateSearchJob implements ShouldQueue
{
    use Queueable;

    public function __construct(public array $params) {}

    public function handle(): void
    {
        $sid       = $this->params['sid'];
        $providers = $this->params['providers'] ?? ['aa'];

        // init envelope/progress defensively
        $payload = Cache::get("search:{$sid}") ?? [
            'status'   => 'fetching',
            'results'  => [],
            'meta'     => [],
            'progress' => ['total' => 0, 'done' => 0, 'providers' => []],
        ];

        $payload['status'] = 'fetching';
        $payload['progress']['total'] = count($providers);
        $payload['progress']['done']  = $payload['progress']['done'] ?? 0;
        foreach ($providers as $p) {
            $payload['progress']['providers'][$p] = $payload['progress']['providers'][$p] ?? 'queued';
        }
        Cache::put("search:{$sid}", $payload, now()->addMinutes(10));

        // fan out WITHOUT Bus::batch (simpler, no Batchable needed)
        foreach ($providers as $provider) {
            dispatch(new ProviderFetchJob(array_merge($this->params, ['provider' => $provider])));
        }
    }
}
