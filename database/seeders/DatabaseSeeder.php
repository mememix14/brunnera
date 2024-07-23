<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call(RolesTableSeeder::class);

        // Create some users and assign roles
        $adminRole = Role::where('name', 'admin')->first();
        $userRole = Role::where('name', 'user')->first();

        $admin = User::create([
            'name' => 'rahma',
            'email' => 'rahma@admin.com',
            'password' => bcrypt('rahma'),
        ]);
        $admin->roles()->attach($adminRole);
    }
}
