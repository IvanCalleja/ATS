<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            'name' => 'Zarina Kate Lagatic',
            'role_id' => 1,
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ivan Jefferson Calleja',
            'role_id' => 2,
            'email' => 'staff@gmail.com',
            'password' => Hash::make('111'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ivan Jefferson Calleja',
            'role_id' => 3,
            'email' => 'student@gmail.com',
            'password' => Hash::make('111'),
        ]);
    }
}
