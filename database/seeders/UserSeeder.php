<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // USER BAWAAN TETAP ADA
        User::factory(10)->create();

        // TAMBAHAN ADMIN PERMANEN
        User::updateOrCreate(
            [
                'email' => 'marika@gmail.com',
            ],
            [
                'role_id' => 1,
                'name' => 'Marika Rahayu',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );
    }
}