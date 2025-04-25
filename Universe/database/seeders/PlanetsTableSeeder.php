<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Support\Facades\DB;
use App\Models\Planet;

class PlanetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // planeten toevoegen aan de database met behulp van Eloquent
        Planet::insert([
            ['solar_system_id' => 1, 'name' => 'Mars', 'description' => 'Mars staat bekend als de "Rode Planeet" vanwege het ijzerrijke stof op zijn oppervlak.', 'size_in_km' => 6779, 'created_at' => now(), 'updated_at' => now()],
            ['solar_system_id' => 1, 'name' => 'Venus', 'description' => 'Venus is de heetste planeet in ons zonnestelsel.', 'size_in_km' => 12104, 'created_at' => now(), 'updated_at' => now()],
            ['solar_system_id' => 1, 'name' => 'Earth', 'description' => 'De enige planeet waarvan bekend is dat hij leven herbergt.', 'size_in_km' => 12756, 'created_at' => now(), 'updated_at' => now()],
            ['solar_system_id' => 1, 'name' => 'Jupiter', 'description' => 'Jupiter is de grootste planeet in ons zonnestelsel.', 'size_in_km' => 139822, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
