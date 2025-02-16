<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\PlanetController;



Route::get('/planets', [PlanetController::class, 'index'])->name('planets.index');
Route::get('/planets/{planet}', [PlanetController::class, 'show']);