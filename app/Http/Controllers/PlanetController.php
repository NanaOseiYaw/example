<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Planet;

class PlanetController extends Controller
{
    // Method to display all planets
    public function index()
    {
        // Fetch all planets from the database
        //$planets = DB::table('planets')->get(); // Returns a collection of stdClass objects
        $planets = Planet::all();
        return view('planets.index', ['planets' => $planets]);
    }

    // Method to show a specific planet
    public function show($planet)
    {
        $planet = strtolower($planet); // Ensure case-insensitive lookup

        // Fetch the planet by name from the database
        $planetData = Planet::where('name', ucfirst($planet))->first();
        
        if ($planetData) {
            return view('planets.show', [
                'name' => $planetData->name,
                'description' => $planetData->description,
                'size_in_km' => $planetData->size_in_km
            ]);
        } else {
            return abort(404, 'Planet not found');
        }
    }
}


?>