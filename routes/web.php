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

    if (request()->has('planet')) {
        $planetNaam = strtolower(request('planet'));

        $filterplaneten = $planeten->filter(function ($planet) use ($planetNaam) {
            return strtolower($planet) === $planetNaam;
        });

        return response()->json($filterplaneten->values());
    }

    return response()->json($planeten);
});

Route::get('/planets', function () {
    $planets = [
        [
            'name' => 'Mars',
            'description' => 'Mars is the fourth planet from the Sun and the second-smallest planet in the Solar System, being larger than only Mercury.'
        ],
        [
            'name' => 'Venus',
            'description' => 'Venus is the second planet from the Sun. It is named after the Roman goddess of love and beauty.'
        ],
        [
            'name' => 'Earth',
            'description' => 'Our home planet is the third planet from the Sun, and the only place we know of so far thats inhabited by living things.'
        ],
        [
            'name' => 'Jupiter',
            'description' => 'Jupiter is a gas giant and doesn\'t have a solid surface, but it may have a solid inner core about the size of Earth.'
        ],
    ];

    return view('planets.index', ['planets' => $planets]);
});
