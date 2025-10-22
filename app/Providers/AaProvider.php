<?php

namespace App\Services\Providers;

use App\Services\Providers\Contracts\Provider;

class AaProvider implements Provider
{
    public function name(): string { return 'aa'; }

    /**
     * Build payload for POST /v1/queries (universal)
     */
    public function buildRequest(array $params): array
    {
        $origin      = strtoupper($params['origin']);
        $destination = strtoupper($params['destination']);
        $date        = $params['date'];       // ISO Y-m-d
        $pax         = (int)($params['pax'] ?? 1);

        $url = "https://www.aa.com/booking/search?type=OneWay&searchType=Award"
             . "&from={$origin}&to={$destination}&pax={$pax}&cabin=&locale=en_US"
             . "&nearbyAirports=true&depart={$date}&carriers=ALL&pos=US&adult={$pax}";

        return [
            "source" => "universal",
            "render" => "html",
            "url"    => $url,
            "xhr"    => true,
            "parse"  => true,
            "browser_instructions" => [
                ["type" => "wait", "wait_time_s" => 9]
            ]
        ];
    }

    /**
     * From the XHR content JSON, pull ONLY the AA itinerary response bodies.
     * Returns an array of decoded JSON bodies (php arrays).
     */
    public function extractItineraryBodies(array $xhrContent): array
    {
        $matches = [];

        // Oxylabs may return array directly OR wrap in ['results'][0]['content']
        $entries = $xhrContent;

        // Normalize if Oxylabs returned a wrapper format
        if (isset($xhrContent['results'][0]['content']) && is_array($xhrContent['results'][0]['content'])) {
            $entries = $xhrContent['results'][0]['content'];
        }

        foreach ($entries as $entry) {
            $url = $entry['url'] ?? '';
            if (!is_string($url)) continue;

            // Look for AA itinerary endpoint
            if (str_contains($url, 'aa.com/booking/api/search/itinerary')) {
                $body = $entry['response_body'] ?? $entry['response']['body'] ?? null;

                // Some Oxylabs responses store JSON body as string
                if (is_string($body)) {
                    $decoded = json_decode($body, true);
                    if (is_array($decoded)) {
                        $matches[] = $decoded;
                    }
                } elseif (is_array($body)) {
                    $matches[] = $body;
                }
            }
        }

        return $matches;
    }

    /**
     * For now, we keep Provider::parse() to satisfy the interface.
     * We won't use it in AA (we’ll use extractItineraryBodies() first, then parse in next step).
     */
    public function parse(array $oxylabsJson, array $params): array
    {
        return [];
    }
}
