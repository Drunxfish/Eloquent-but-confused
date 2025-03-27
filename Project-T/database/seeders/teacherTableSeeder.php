<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class teacherTableSeeder extends Seeder
{
    public function run(): void
    {
        Teacher::insert([
            ['name' => 'Tom', 'surname' => 'Hawk', 'entry_date' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Jane', 'surname' => 'Doe', 'entry_date' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'John', 'surname' => 'Smith', 'entry_date' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Emily', 'surname' => 'Clark', 'entry_date' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Michael', 'surname' => 'Brown', 'entry_date' => now(), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
