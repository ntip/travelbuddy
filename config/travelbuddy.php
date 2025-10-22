<?php

return [
    'currency' => env('TRAVELBUDDY_CURRENCY', 'AUD'),

    // Hydration policies by route class
    'route_policies' => [
        // example: 'BNESYD' => 'HIGH',  'SYDMEL' => 'HIGH'
    ],

    'classes' => [
        'HIGH'   => ['reuse_window_sec' => 24*3600, 'force_refresh_sec' => 48*3600, 'hydrate' => 'DAILY'],
        'MEDIUM' => ['reuse_window_sec' => 12*3600, 'force_refresh_sec' => 36*3600, 'hydrate' => '3_DAYS'],
        'LOW'    => ['reuse_window_sec' =>  2*3600, 'force_refresh_sec' => 12*3600, 'hydrate' => 'NEVER'],
        'NEVER'  => ['reuse_window_sec' =>  0,       'force_refresh_sec' => 0,       'hydrate' => 'NEVER'], // explicit override
    ],
];
