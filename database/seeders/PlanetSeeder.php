
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetSeeder extends Seeder
{
    public function run()
    {
        DB::table('planets')->insert([
            ['name' => 'Mars', 'description' => 'Mars is the fourth planet...', 'size_in_km' => 6779],
            ['name' => 'Venus', 'description' => 'Venus is the second planet...', 'size_in_km' => 12104],
            ['name' => 'Earth', 'description' => 'Earth is our home planet...', 'size_in_km' => 12742],
            ['name' => 'Jupiter', 'description' => 'Jupiter is the largest planet...', 'size_in_km' => 139820],
        ]);
    }
}




?>
