<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TripSaver
{
    public function saveMany(string $sid, array $ctx, array $offers): array
    {
        $summaries = [];
        foreach ($offers as $offer) {
            DB::beginTransaction();
            try {
                $tripId = (string) Str::uuid();

                DB::table('tripdata')->insert([
                    'id'             => $tripId,
                    'takeoff_time'   => $offer['trip']['takeoff_time'],
                    'takeoff_date'   => $offer['trip']['takeoff_date'],
                    'takeoff_iata'   => $offer['trip']['takeoff_iata'],
                    'landing_time'   => $offer['trip']['landing_time'],
                    'landing_date'   => $offer['trip']['landing_date'],
                    'landing_iata'   => $offer['trip']['landing_iata'],
                    'trip_duration'  => $offer['trip']['trip_duration'],
                    'trip_partner'   => $offer['trip']['trip_partner'] ?? $ctx['provider'],
                    'trip_source'    => $offer['trip']['trip_source'] ?? $ctx['provider'],
                    'trip_class'     => $offer['trip']['trip_class'],
                    'trip_points'    => $offer['trip']['trip_points'],
                    'trip_tax'       => $offer['trip']['trip_tax'],
                    'created_at'     => now(),
                    'updated_at'     => now(),
                ]);

                foreach ($offer['flights'] as $f) {
                    DB::table('flightdata')->insert([
                        'id'               => (string) Str::uuid(),
                        'trip_id'          => $tripId, // ensure column exists
                        'flight_airline'   => $f['flight_airline'],
                        'flight_number'    => $f['flight_number'],
                        'flight_class'     => $f['flight_class'],
                        'flight_duration'  => $f['flight_duration'],
                        'takeoff_time'     => $f['takeoff_time'],
                        'takeoff_date'     => $f['takeoff_date'],
                        'takeoff_iata'     => $f['takeoff_iata'],
                        'landing_time'     => $f['landing_time'],
                        'landing_date'     => $f['landing_date'],
                        'landing_iata'     => $f['landing_iata'],
                        'rules'            => $f['rules'] ?? '',
                        'created_at'       => now(),
                        'updated_at'       => now(),
                    ]);
                }

                DB::commit();

                $summaries[] = [
                    'trip_id'      => $tripId,
                    'provider'     => $offer['provider'],
                    'source'       => $offer['source'],
                    'currency'     => $offer['currency'],
                    'takeoff_iata' => $offer['trip']['takeoff_iata'],
                    'landing_iata' => $offer['trip']['landing_iata'],
                    'date'         => $offer['trip']['takeoff_date'],
                    'class'        => $offer['trip']['trip_class'],
                    'points'       => $offer['trip']['trip_points'],
                    'tax'          => $offer['trip']['trip_tax'],
                    'duration_min' => $offer['trip']['trip_duration'],
                    'segments'     => $offer['trip']['trip_flights'],
                ];
            } catch (\Throwable $e) {
                DB::rollBack();
                $summaries[] = ['error'=>'save_failed','message'=>$e->getMessage(),'provider'=>$offer['provider'] ?? 'aa'];
            }
        }
        return $summaries;
    }
}
