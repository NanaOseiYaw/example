<?php
use Illuminate\Support\Facades\Route;

Route::get('/planeten', function () {
    return response()->json([
        "Uranus",
        "Jupiter",
        "Mars",
        "Aarde",
        "Saturnus",
        "Pluto",
        "Neptunus",
        "Venus"
    ]);
});
