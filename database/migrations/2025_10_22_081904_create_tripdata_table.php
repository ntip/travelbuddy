<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('tripdata', function (Blueprint $t) {
            // keys
            $t->uuid('id')->primary();

            // trip core (what you asked for)
            $t->time('takeoff_time');                 // e.g., 10:35:00
            $t->date('takeoff_date');                 // e.g., 2026-02-07
            $t->char('takeoff_iata', 3)->index();     // e.g., SYD

            $t->time('landing_time');                 // e.g., 06:05:00
            $t->date('landing_date');                 // e.g., 2026-02-07 (local)
            $t->char('landing_iata', 3)->index();     // e.g., LAX

            $t->unsignedInteger('trip_duration')->nullable()->comment('minutes total'); // 920

            $t->string('trip_partner', 32)->index()->comment('va|ey|aa|synthetic-aa etc');
            $t->string('trip_source', 32)->nullable()->comment('broker name or origin, e.g., oxylabs');
            $t->string('trip_class', 16)->index()->comment('ANY|ECONOMY|PREMIUM|BUSINESS|FIRST');

            $t->unsignedInteger('trip_points')->nullable()->comment('award points/miles cost if applicable');
            $t->decimal('trip_tax', 10, 2)->nullable()->comment('monetary taxes/fees in default currency');

            // optional helpers you’ll likely want soon
            $t->char('origin', 3)->index()->nullable();      // directional start (if different from takeoff_iata)
            $t->char('destination', 3)->index()->nullable(); // directional end (if different from landing_iata)
            $t->string('route', 6)->index()->nullable();     // alphabetical concatenated e.g., LAXSYD

            // generic storage for extras (don’t overuse; keep core columns first)
            $t->json('extras')->nullable();

            $t->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tripdata');
    }
};
