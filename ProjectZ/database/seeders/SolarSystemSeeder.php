<?php

namespace Database\Seeders;

use App\Models\SolarSystem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SolarSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SolarSystem::insert(['name' => 'The Solar System', 'age_in_years' => 4600000000, 'created_at' => now(), 'updated_at' => now()]);
    }
}
