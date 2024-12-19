<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'unsia@pbw.com',
                'password' => Hash::make('password123'),
                'profile_photo' => '/image/Erich Chresnanda.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // [
            //     'name' => 'Static User',
            //     'email' => 'user@example.com',
            //     'password' => Hash::make('password123'),
            //     'profile_photo' => null,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ],
        ]);
    }
}
