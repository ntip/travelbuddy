<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class OxylabsClient
{
    protected string $queriesEndpoint;
    protected string $dataBase;
    protected string $username;
    protected string $password;
    protected int $timeout;
    protected int $connectTimeout;

    public function __construct()
    {
        $this->queriesEndpoint = env('OXYLABS_QUERIES_ENDPOINT', 'https://realtime.oxylabs.io/v1/queries');
        $this->dataBase        = rtrim(env('OXYLABS_DATA_BASE', 'https://data.oxylabs.io/v1'), '/');
        $this->username        = env('OXYLABS_USERNAME');
        $this->password        = env('OXYLABS_PASSWORD');
        $this->timeout         = (int) env('OXYLABS_TIMEOUT', 120);
        $this->connectTimeout  = (int) env('OXYLABS_CONNECT_TIMEOUT', 20);
    }

    public function postQueries(array $payload): array
    {
        $resp = Http::withBasicAuth($this->username, $this->password)
            ->retry(2, 1000) // 2 retries, 1s backoff
            ->withOptions([
                'verify'          => false,                 // remove once your CA bundle is set up
                'connect_timeout' => $this->connectTimeout,
            ])
            ->timeout($this->timeout)
            ->acceptJson()
            ->post($this->queriesEndpoint, $payload);

        if (!$resp->ok()) {
            throw new \RuntimeException("Oxylabs Queries error {$resp->status()}: ".$resp->body());
        }
        return $resp->json();
    }

    public function getResultContent(string $queryId, int $resultIndex = 0, string $type = 'xhr'): array
    {
        $url = "{$this->dataBase}/queries/{$queryId}/results/{$resultIndex}/content?type={$type}";

        $resp = \Illuminate\Support\Facades\Http::withBasicAuth($this->username, $this->password)
            ->retry(2, 1000)
            ->withOptions([
                'verify'          => false,                         // remove when your CA bundle is set
                'connect_timeout' => $this->connectTimeout,
            ])
            ->timeout($this->timeout)
            ->acceptJson()
            ->get($url);

        if (!$resp->ok()) {
            throw new \RuntimeException("Oxylabs Content error {$resp->status()}: ".$resp->body());
        }
        return $resp->json();
    }

}
