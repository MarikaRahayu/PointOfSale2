<?php

namespace Database\Seeders;

use App\Models\JenisProduk;
use App\Models\User;
use Illuminate\Database\Seeder;

class JenisProdukSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::where('email', 'marika@gmail.com')->first();

        $jenisProduk = [
            'Makanan',
            'Minuman',
            'Snack',
            'Sembako',
            'Lainnya',
        ];

        foreach ($jenisProduk as $nama) {
            JenisProduk::updateOrCreate(
                [
                    'nama' => $nama,
                ],
                [
                    'user_id' => $admin->id,
                    'nama' => $nama,
                ]
            );
        }
    }
}