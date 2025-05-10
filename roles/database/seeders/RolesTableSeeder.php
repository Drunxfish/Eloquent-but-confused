<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use Faker\Generator as Faker;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert(
            [
                ['name' => 'user', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'admin', 'created_at' => now(), 'updated_at' => now()],
                ['name' => 'viewer', 'created_at' => now(), 'updated_at' => now()],
            ]
        );
    }
}
