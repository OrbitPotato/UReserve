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
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'role_id' => 1,
            'first_name' => 'test first',
            'last_name' => 'test last',
            'email' => 'student@gmail.com',
            'password' => Hash::make('student'),
        ]);

        // Professor
        User::create([
            'role_id' => 2,
            'first_name' => 'prof first',
            'last_name' => 'prof last',
            'email' => 'professor@gmail.com',
            'password' => Hash::make('professor'),
        ]);

        // Staff
        User::create([
            'role_id' => 3,
            'first_name' => 'staff first',
            'last_name' => 'stafflast',
            'email' => 'staff@gmail.com',
            'password' => Hash::make('staff'),
        ]);

    }
}
