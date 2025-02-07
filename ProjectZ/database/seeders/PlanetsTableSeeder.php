<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlanetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // planeten toevoegen aan de database
        DB::table('planets')->insert([
            [
                'name' => 'Mars',
                'description' => 'Mars staat bekend als de "Rode Planeet" vanwege het ijzerrijke stof op zijn oppervlak.
         Het heeft de hoogste vulkaan in het zonnestelsel, Olympus Mons, en diepe canyons zoals Valles Marineris.',
                'size_in_km' => 6779,
            ],
            [
                'name' => 'Venus',
                'description' => 'Venus is de heetste planeet in ons zonnestelsel vanwege een extreem broeikaseffect. Het heeft een dichte atmosfeer vol koolstofdioxide en zwavelzuurwolken.',
                'size_in_km' => 12104,
            ],
            [
                'name' => 'Earth',
                'description' => 'De enige planeet waarvan bekend is dat hij leven herbergt. Aarde heeft een unieke atmosfeer met zuurstof en water, en een divers ecosysteem.',
                'size_in_km' => 12756,
            ],
            [
                'name' => 'Jupiter',
                'description' => 'Jupiter is de grootste planeet in ons zonnestelsel en bestaat voornamelijk uit gas. Het heeft de Grote Rode Vlek, een enorme storm die al eeuwen woedt, en minstens 79 manen, waaronder de grote maan Ganymedes.',
                'size_in_km' => 139822,
            ],
        ]);
    }
}
