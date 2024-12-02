<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('users')->insert([

            //admin
            [
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'role' => 'admin',
            'status' => '1',
            'password' => Hash::make('admin123'),
            ],

            //user
            [
            'name' => 'User',
            'email' => 'user@gmail.com',
            'role' => 'user',
            'status' => '1',
            'password' => Hash::make('admin123'),
            ]
        ]);
    }
}
