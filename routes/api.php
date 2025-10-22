<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FlightSearchController;

Route::get('/search-start',   [FlightSearchController::class, 'start']);      // /api/search-start
Route::get('/search-status',  [FlightSearchController::class, 'status']);     // /api/search-status
Route::get('/search-results', [FlightSearchController::class, 'renderable']); // /api/search-results
