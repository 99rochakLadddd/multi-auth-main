<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Rochak',
            'email' => 'user@rochak.com',
            'password' => Hash::make('12345678'),
            'role' => 'user'
        ]);

        DB::table('users')->insert([
            'name' => 'Numucha',
            'email' => 'admin@numucha.com',
            'password' => Hash::make('87654321'),
            'role' => 'admin'
        ]);

        DB::table('users')->insert([
            'name' => 'Diyog',
            'email' => 'vendor@diyog.com',
            'password' => Hash::make('00000000'),
            'role' => 'vendor'
        ]);
    }
}
