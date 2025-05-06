<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Admin User',
            'telephone' => '0771234567',
            'email' => 'admin@example.com',
            'grade' => 'Advanced',
            'class_type' => 'Kandyan',
            'gender' => 'Male',
            'role' => 'admin',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Student User',
            'telephone' => '0781234567',
            'email' => 'student@example.com',
            'grade' => 'Beginner',
            'class_type' => 'Bollywood',
            'gender' => 'Female',
            'role' => 'student',
            'password' => bcrypt('password')
        ]);
    }
}
