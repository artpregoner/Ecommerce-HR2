<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create an employee
        User::create([
            'name' => 'Art Pregoner',
            'email' => 'pregoner@user.com',
            'password' => Hash::make('user12345678'),
            'role' => 'user', // Employee role
        ]);
        User::create([
            'name' => 'PregonerArt 2',
            'email' => 'artjavar@user.com',
            'password' => Hash::make('user12345678'),
            'role' => 'admin', // Employee role
        ]);


        // Create an HR user (HR2)
        User::create([
            'name' => 'Ate Gay HR',
            'email' => 'hrmanager@user.com',
            'password' => Hash::make('user12345678'),
            'role' => 'admin', // HR role
        ]);

        // Create an Admin user
        User::create([
            'name' => 'Amil Admin',
            'email' => 'bcp@admin.com',
            'password' => Hash::make('admin12345678'),
            'role' => 'user', // Admin role
        ]);
    }
}
