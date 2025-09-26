<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'username' => 'Admin',
            'password' => bcrypt('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'username' => 'Admin2',
            'password' => bcrypt('admin234'),
            'role' => 'admin',
        ]);

        User::create([
            'username' => 'Medaka',
            'password' => bcrypt('medaka123'),
            'role' => 'operator',
        ]);

        User::create([
            'username' => 'Chaerin',
            'password' => bcrypt('chaerin123'),
            'role' => 'operator',
        ]);

    }
}
