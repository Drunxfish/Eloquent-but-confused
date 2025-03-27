<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class subjectTableSeeder extends Seeder
{


    // Dummy data voor docenten vakken
    public function run(): void
    {
        Subject::insert([
            ['teacher_id' => '1', 'name' => 'Mathematics', 'description' => 'Study of numbers and equations', 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => '2', 'name' => 'Physics', 'description' => 'Study of matter and energy', 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => '3', 'name' => 'Computer Science', 'description' => 'Study of computation and algorithms', 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => '4', 'name' => 'Software Engineering', 'description' => 'Design and development of software systems', 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => '5', 'name' => 'Artificial Intelligence', 'description' => 'Development of intelligent systems', 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => '5', 'name' => 'Mathematics', 'description' => 'Study of numbers and equations', 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => '4', 'name' => 'Physics', 'description' => 'Study of matter and energy', 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => '3', 'name' => 'Computer Science', 'description' => 'Study of computation and algorithms', 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => '2', 'name' => 'Software Engineering', 'description' => 'Design and development of software systems', 'created_at' => now(), 'updated_at' => now()],
            ['teacher_id' => '1', 'name' => 'Artificial Intelligence', 'description' => 'Development of intelligent systems', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
