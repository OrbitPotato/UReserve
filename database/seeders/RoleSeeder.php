<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Roles::create([
            'role' => 'Student'
        ]);
        Roles::create([
            'role' => 'Professor'
        ]);
        Roles::create([
            'role' => 'Staff'
        ]);
    }
}
