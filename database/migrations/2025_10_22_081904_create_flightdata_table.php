<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('flightdata', function (Blueprint $t) {
            $t->uuid('id')->primary();

            // relation to trip
            $t->uuid('trip_id')->index(); // we’ll enforce integrity in app logic for now

            // what you asked for
            $t->string('flight_airline', 3)->index();   // e.g., QF, VA, AA (2–3 chars to be safe)
            $t->string('flight_number', 8)->index();    // e.g., 11
            $t->string('flight_class', 16)->nullable(); // cabin/RBD if you want, e.g., ECONOMY / I / U
            $t->unsignedInteger('flight_duration')->nullable()->comment('minutes');

            $t->time('takeoff_time');
            $t->date('takeoff_date');
            $t->char('takeoff_iata', 3)->index();

            $t->time('landing_time');
            $t->date('landing_date');
            $t->char('landing_iata', 3)->index();

            $t->json('rules')->nullable(); // fare rules, baggage, change/cancel, etc.

            // ordering helpers (useful when re-assembling slices)
            $t->unsignedSmallInteger('slice_index')->default(0);
            $t->unsignedSmallInteger('segment_index')->default(0);

            $t->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('flightdata');
    }
};
