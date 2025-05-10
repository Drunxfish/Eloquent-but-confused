<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Users
        $alice = User::where('email', 'alice@example.com')->first();
        $bob = User::where('email', 'bob@example.com')->first();
        $charlie = User::where('email', 'charlie@example.com')->first();

        // Roles
        $adminRole = Role::where('name', 'admin')->first();
        $viewerRole = Role::where('name', 'viewer')->first();
        $userRole = Role::where('name', 'user')->first();

        // Assign roles to users
        $alice->roles()->attach($adminRole->id);
        $bob->roles()->attach($viewerRole->id);
        $charlie->roles()->attach($userRole->id);
    }
}
