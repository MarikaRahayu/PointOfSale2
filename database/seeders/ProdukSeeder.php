<?php

namespace Database\Seeders;

use App\Models\Produk;
use App\Models\JenisProduk;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        $jenisProduk = JenisProduk::pluck('id')->toArray();

        $user = User::where('email', 'marika@gmail.com')->first();

        Produk::factory()
            ->count(100)
            ->create([
                'user_id' => $user->id,
            ])
            ->each(function ($produk) use ($jenisProduk) {
                $produk->update([
                    'jenis_produk_id' => $jenisProduk[array_rand($jenisProduk)],
                ]);
            });
    }
}