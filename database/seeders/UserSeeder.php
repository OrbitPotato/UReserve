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
            'email' => 'professor@gmail.com',
            'password' => Hash::make('professor'),
        ]);

        // Professor

        // Staff

    }
}
