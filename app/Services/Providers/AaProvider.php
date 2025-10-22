<?php

namespace App\Services\Providers;

use App\Services\Providers\Contracts\Provider;

class AaProvider implements Provider
{
    public function name(): string { return 'aa'; }

    public function buildRequest(array $params): array
    {
        $origin      = strtoupper($params['origin'] ?? '');
        $destination = strtoupper($params['destination'] ?? '');
        $date        = $params['date'] ?? '';
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
            "return_page_source" => true,
            "browser_instructions" => [
                ["type" => "wait", "wait_time_s" => 18]
            ]
        ];
    }

    /** Data API path (fallback when not inline) */
    public function extractItineraryBodies(array $xhrContent): array
    {
        $entries = $xhrContent['results'][0]['content'] ?? $xhrContent['content'] ?? $xhrContent;
        return $this->extractFromEntries($entries);
    }

    /** Inline realtime path */
    public function extractItineraryBodiesFromInline(array $queriesResponse): array
    {
        // fast path using expected shapes
        $results = $queriesResponse['results'] ?? [];
        $bodies = [];

        if (is_array($results)) {
            foreach ($results as $res) {
                $content = $res['content'] ?? null;
                if (is_array($content)) {
                    $bodies = array_merge($bodies, $this->extractFromEntries($content));
                }
                if (isset($res['xhr']) && is_array($res['xhr'])) {
                    $bodies = array_merge($bodies, $this->extractFromEntries($res['xhr']));
                }
            }
        }

        // if still empty, do a DEEP recursive search across the entire inline response
        if (count($bodies) === 0) {
            $bodies = $this->searchItineraryBodiesDeep($queriesResponse);
        }

        return $bodies;
    }

    /** Scan a flat-ish list of entries for the AA itinerary URL and decode body */
    private function extractFromEntries(array $entries): array
    {
        $out = [];
        foreach ($entries as $entry) {
            if (!is_array($entry)) continue;

            $url  = $entry['url']
                ?? ($entry['request']['url'] ?? null)
                ?? ($entry['item']['url'] ?? null)
                ?? ($entry['data']['request']['url'] ?? null);

            if (!is_string($url) || $url === '') continue;
            if (!str_contains($url, 'aa.com/booking/api/search/itinerary')) continue;

            $body = $entry['response_body']
                ?? ($entry['response']['body'] ?? null)
                ?? ($entry['item']['response']['body'] ?? null)
                ?? ($entry['data']['response']['body'] ?? null)
                ?? ($entry['body'] ?? null);

            if (is_string($body)) {
                $decoded = json_decode($body, true);
                if (is_array($decoded)) $out[] = $decoded;
            } elseif (is_array($body)) {
                $out[] = $body;
            }
        }
        return $out;
    }

    /**
     * Brutal fallback: recursively walk the entire inline payload,
     * collect any node that has a 'url' containing the itinerary endpoint,
     * then try to decode a sibling/parent 'body'.
     */
    public function searchItineraryBodiesDeep(array $data): array
    {
        $matches = [];

        $walker = function ($node) use (&$walker, &$matches) {
            if (is_array($node)) {
                // If this node itself looks like a network entry:
                $url = $node['url']
                    ?? ($node['request']['url'] ?? null)
                    ?? ($node['item']['url'] ?? null)
                    ?? ($node['data']['request']['url'] ?? null);

                if (is_string($url) && str_contains($url, 'aa.com/booking/api/search/itinerary')) {
                    $body = $node['response_body']
                        ?? ($node['response']['body'] ?? null)
                        ?? ($node['item']['response']['body'] ?? null)
                        ?? ($node['data']['response']['body'] ?? null)
                        ?? ($node['body'] ?? null);

                    if (is_string($body)) {
                        $decoded = json_decode($body, true);
                        if (is_array($decoded)) $matches[] = $decoded;
                    } elseif (is_array($body)) {
                        $matches[] = $body;
                    }
                }

                // Recurse
                foreach ($node as $child) {
                    $walker($child);
                }
            }
        };

        $walker($data);
        return $matches;
    }

    public function parse(array $oxylabsJson, array $params): array
    {
        return [];
    }
}
