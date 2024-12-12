<?php

use Illuminate\Support\Facades\Route;

Route::get('/planeten', function () {
    $planeten = collect([
        "Uranus",
        "Jupiter",
        "Mars",
        "Aarde",
        "Saturnus",
        "Pluto",
        "Neptunus",
        "Venus"
    ]);

    // Controleer of er een 'planet' parameter is en filter de collectie indien nodig
    if (request()->has('planet')) {
        $planetNaam = strtolower(request('planet'));

        $filterplaneten = $planeten->filter(function ($planet) use ($planetNaam) {
            return strtolower($planet) === $planetNaam;
        });

        // Retourneer het gefilterde resultaat als JSON
        return response()->json($filterplaneten->values());
    }

    // Retourneer alle planeten als er geen filter is
    return response()->json($planeten);
});
