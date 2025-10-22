<?php

namespace App\Services\Parsers;

use Illuminate\Support\Str;

class AaItineraryParser
{
    /**
     * @param array $bodies  One or more AA itinerary JSON objects (from provider)
     * @param array $ctx     ['origin','destination','date','pax','cabin','currency','provider']
     * @return array         Normalized offers ready for TripSaver
     */
    public function parseBodies(array $bodies, array $ctx): array
    {
        $offers = [];

        foreach ($bodies as $body) {
            $slices = $body['slices'] ?? [];
            foreach ($slices as $slice) {
                // Ignore “nearby” airports (e.g., NTL→MEL when we asked SYD→MEL)
                if (!$this->sliceMatchesRequested($slice, $ctx)) {
                    continue;
                }

                $pricingDetails = $slice['pricingDetail'] ?? [];
                if (!is_array($pricingDetails) || empty($pricingDetails)) {
                    // Fall back: some AA payloads have pricing at top level keyed by slice id
                    $pricingDetails = $body['pricingDetail'] ?? [];
                }

                foreach ($pricingDetails as $pd) {
                    // We only want available award products with non-zero points
                    $available   = $pd['productAvailable'] ?? false;
                    $points      = $this->intVal($pd['perPassengerAwardPoints'] ?? 0);
                    $benefitKey  = strtoupper((string)($pd['benefitKey'] ?? ($pd['productType'] ?? '')));
                    if (!$available || $points <= 0 || ($benefitKey !== 'COACH' && $benefitKey !== 'BUSINESS' && $benefitKey !== 'FIRST')) {
                        continue;
                    }

                    $offer = $this->buildOffer($slice, $pd, $body, $ctx);
                    if ($offer !== null) {
                        $offers[] = $offer;
                    }
                }
            }
        }

        return $offers;
    }

    // ---------- helpers ----------

    private function sliceMatchesRequested(array $slice, array $ctx): bool
    {
        $segments = $slice['segments'] ?? [];
        if (empty($segments)) return false;

        $firstSeg = $segments[0] ?? [];
        $firstLeg = ($firstSeg['legs'][0] ?? []) ?: [];
        $firstOrigin = strtoupper(
            $firstLeg['origin']['code']
            ?? $firstSeg['origin']['code']
            ?? ''
        );

        $lastSeg = $segments[count($segments) - 1] ?? [];
        $lastLeg = ($lastSeg['legs'][count($lastSeg['legs'] ?? []) - 1] ?? []) ?: [];
        $lastDest = strtoupper(
            $lastLeg['destination']['code']
            ?? $lastSeg['destination']['code']
            ?? ''
        );

        return $firstOrigin === strtoupper($ctx['origin'] ?? '')
            && $lastDest   === strtoupper($ctx['destination'] ?? '');
    }

    private function buildOffer(array $slice, array $pd, array $body, array $ctx): ?array
    {
        $segments   = $slice['segments'] ?? [];
        if (empty($segments)) return null;

        // Times / IATA
        $depIso = $this->iso(($segments[0]['legs'][0]['departureDateTime'] ?? $segments[0]['departureDateTime'] ?? null));
        $arrIso = $this->iso(($this->endLeg($segments)['arrivalDateTime'] ?? null));

        $depDate = $depIso ? substr($depIso, 0, 10) : ($ctx['date'] ?? null);
        $arrDate = $arrIso ? substr($arrIso, 0, 10) : $depDate;

        $depTime = $depIso ? substr($depIso, 11, 5) : null;
        $arrTime = $arrIso ? substr($arrIso, 11, 5) : null;

        $depIata = strtoupper(
            $segments[0]['legs'][0]['origin']['code']
                ?? $segments[0]['origin']['code']
                ?? $ctx['origin'] ?? ''
        );
        $arrIata = strtoupper(
            $this->endLeg($segments)['destination']['code']
                ?? $ctx['destination'] ?? ''
        );

        // Duration
        $sliceDur = (int)($slice['durationInMinutes'] ?? 0);

        // Program / partner
        $carrierNames = $slice['carrierNames'] ?? ($body['carrierNames'] ?? []);
        $partner = is_array($carrierNames) && !empty($carrierNames) ? (string)$carrierNames[0] : 'American Airlines';

        // Currency/taxes/points
        $taxObj   = $pd['perPassengerTaxesAndFees'] ?? $pd['allPassengerTaxesAndFees'] ?? ['amount' => 0, 'currency' => ($ctx['currency'] ?? 'USD')];
        $taxAmt   = (float)($taxObj['amount'] ?? 0);
        $taxCcy   = (string)($taxObj['currency'] ?? ($ctx['currency'] ?? 'USD'));
        $points   = $this->intVal($pd['perPassengerAwardPoints'] ?? 0);

        // Cabin/class mapping
        $tripClass = $this->mapCabin($pd['productType'] ?? $pd['benefitKey'] ?? 'COACH');

        // Build flights (flatten legs)
        $flights = $this->buildFlights($segments, $tripClass);

        return [
            'provider' => $ctx['provider'] ?? 'aa',
            'source'   => 'oxylabs',
            'currency' => $taxCcy,

            'trip' => [
                'takeoff_time'   => $depTime,
                'takeoff_date'   => $depDate,
                'takeoff_iata'   => $depIata,
                'landing_time'   => $arrTime,
                'landing_date'   => $arrDate,
                'landing_iata'   => $arrIata,
                'trip_duration'  => $sliceDur,
                'trip_partner'   => $partner,
                'trip_source'    => 'aa',
                'trip_class'     => $tripClass,
                'trip_points'    => $points,
                'trip_tax'       => $taxAmt,
                'trip_flights'   => count($flights),
            ],

            'flights' => $flights,
        ];
    }

    private function buildFlights(array $segments, string $tripClass): array
    {
        $flights = [];
        foreach ($segments as $seg) {
            $leg = $seg['legs'][0] ?? [];
            $flight = $seg['flight'] ?? [];

            $carrier = strtoupper((string)($flight['carrierCode'] ?? ''));
            $number  = (string)($flight['flightNumber'] ?? '');

            $depIso  = $this->iso($leg['departureDateTime'] ?? null);
            $arrIso  = $this->iso($leg['arrivalDateTime'] ?? null);

            $flights[] = [
                'flight_airline'   => $carrier ?: 'XX',
                'flight_number'    => $number ?: '0000',
                'flight_class'     => $tripClass,
                'flight_duration'  => (int)($leg['durationInMinutes'] ?? $seg['durationInMinutes'] ?? 0),
                'takeoff_time'     => $depIso ? substr($depIso, 11, 5) : null,
                'takeoff_date'     => $depIso ? substr($depIso, 0, 10)  : null,
                'takeoff_iata'     => strtoupper($leg['origin']['code'] ?? $seg['origin']['code'] ?? ''),
                'landing_time'     => $arrIso ? substr($arrIso, 11, 5) : null,
                'landing_date'     => $arrIso ? substr($arrIso, 0, 10)  : null,
                'landing_iata'     => strtoupper($leg['destination']['code'] ?? $seg['destination']['code'] ?? ''),
                'rules'            => '', // placeholder: you can map fare rules later
            ];
        }
        return $flights;
    }

    private function endLeg(array $segments): array
    {
        $lastSeg = $segments[count($segments) - 1] ?? [];
        $legs    = $lastSeg['legs'] ?? [];
        return $legs[count($legs) - 1] ?? [];
    }

    private function mapCabin(string $productType): string
    {
        $t = strtoupper(trim($productType));
        return match ($t) {
            'BUSINESS', 'J', 'C' => 'BUSINESS',
            'FIRST', 'F'         => 'FIRST',
            default              => 'ECONOMY',
        };
    }

    private function iso(?string $ts): ?string
    {
        if (!$ts) return null;
        // AA returns ISO with offset; keep as-is (YYYY-MM-DDTHH:MM:SS+TZ)
        return $ts;
    }

    private function intVal($v): int
    {
        // AA sometimes returns points as strings "10000"
        if (is_string($v) && ctype_digit($v)) return (int)$v;
        return (int)$v;
    }
}
