<?php

use App\Http\Controllers\RoutingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\FlightSearchController;
use App\Http\Controllers\FlightsPageController;

// routes/web.php
Route::get('/flights', [\App\Http\Controllers\Api\FlightSearchController::class, 'start']);


Route::get('/', [FlightsPageController::class, 'index']);
Route::get('/flights', [FlightsPageController::class, 'index']);
Route::get('/flights/status', [FlightsPageController::class, 'status']);   // now injects $sid
Route::get('/flights/results', [FlightsPageController::class, 'results']); // requires & passes $sid

//Theme Routes;
Route::get('/theme', [RoutingController::class, 'root'])->name('root');
Route::get('/theme/{first}/{second}/{third}', [RoutingController::class, 'thirdLevel'])->name('third');
Route::get('/theme/{first}/{second}', [RoutingController::class, 'secondLevel'])->name('second');
Route::get('/theme/{any}', [RoutingController::class, 'root'])->name('any');


Route::get('', [RoutingController::class, 'index'])->name('index');
