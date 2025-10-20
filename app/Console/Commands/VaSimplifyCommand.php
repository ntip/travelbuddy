<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class VaSimplifyCommand extends Command
{
    protected $signature = 'va:simplify
        {--in=storage/app/travelbuddy/va_bookingAirSearch.response.json : Path to raw response JSON}
        {--out=storage/app/travelbuddy/va_simplified.json : Path to write simplified JSON}';

    protected $description = 'Map bookingAirSearch → flights[] per requested fields (no DB).';

    public function handle(): int
    {
        $in  = base_path($this->option('in'));
        $out = base_path($this->option('out'));

        if (!file_exists($in)) {
            $this->error("Input not found: {$in}");
            return self::FAILURE;
        }

        $raw = json_decode(file_get_contents($in), true);
        if (is_null($raw)) {
            $this->error("Invalid JSON in: {$in}");
            return self::FAILURE;
        }

        // Handle batched GraphQL or single object
        $payload = (is_array($raw) && array_is_list($raw)) ? ($raw[0] ?? []) : $raw;

        $booking = $payload['data']['bookingAirSearch'] ?? null;
        if (!$booking) return $this->writeEmpty($out, 'No data.bookingAirSearch');

        // typos tolerated: orginalResponse / unbunbldedOffers
        $original = $booking['originalResponse']
            ?? $booking['orginalResponse']
            ?? null;
        if (!$original) return $this->writeEmpty($out, 'No original/orginalResponse');

        $offersGroups = $original['unbundledOffers']
            ?? $original['unbunbldedOffers']
            ?? null;
        if (!is_array($offersGroups)) return $this->writeEmpty($out, 'No unbundledOffers');

        // Flatten "array of arrays"
        $offers = [];
        foreach ($offersGroups as $g) {
            if (is_array($g) && array_is_list($g)) {
                foreach ($g as $o) { $offers[] = $o; }
            } elseif (is_array($g)) {
                $offers[] = $g;
            }
        }

        $flights = [];
        foreach ($offers as $offer) {
            if (!is_array($offer)) continue;

            // ---- Mapping per your spec ----
            // status => seatsRemaining.soldout  (fallbacks: top-level soldout, or derive from count)
            $sr     = $offer['seatsRemaining'] ?? [];
            $status = $sr['soldout']
                ?? ($offer['soldout'] ?? null)
                ?? (isset($sr['count']) ? ($sr['count'] <= 0) : null);

            // seats => seatsRemaining.count
            $seats = $sr['count'] ?? null;

            // class => cabinClass
            $class = $offer['cabinClass'] ?? null;

            // finance[] => total.alternatives[]  (pass-through; it’s an array-of-arrays of {amount,currency})
            $finance = $offer['total']['alternatives'] ?? [];
            if (!is_array($finance)) $finance = [];

            // itinerary => itineraryPart.segments
            // In sample: itineraryPart is an ARRAY, each with "segments" (array). Combine all segments.
            $itinerary = [];
            $parts = $offer['itineraryPart'] ?? [];
            if (is_array($parts)) {
                foreach ($parts as $part) {
                    if (isset($part['segments']) && is_array($part['segments'])) {
                        // append segments
                        foreach ($part['segments'] as $seg) $itinerary[] = $seg;
                    }
                }
            }

            $flights[] = [
                'status'    => $status,
                'seats'     => $seats,
                'class'     => $class,
                'finance'   => $finance,
                'itinerary' => $itinerary,
            ];
        }

        @mkdir(dirname($out), 0777, true);
        file_put_contents($out, json_encode(['flights' => $flights], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

        $this->info("Wrote ".count($flights)." flights → {$out}");
        return self::SUCCESS;
    }

    private function writeEmpty(string $out, string $reason): int
    {
        @mkdir(dirname($out), 0777, true);
        file_put_contents($out, json_encode(['flights' => []], JSON_PRETTY_PRINT));
        $this->warn($reason);
        $this->line("Wrote empty flights → {$out}");
        return self::SUCCESS;
    }
}
