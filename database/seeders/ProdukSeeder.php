<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
            [
                'user_id'         => 1,
                'jenis_produk_id' => 1, // Pastikan ID 1 ada di tabel jenis_produk (misal: Snack)
                'foto'            => null,
                'nama'            => 'Chitato Sapi Panggang 68g',
                'harga_beli'      => 9500,
                'harga_jual'      => 11500,
                'stok'            => 50,
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'user_id'         => 1,
                'jenis_produk_id' => 1,
                'foto'            => null,
                'nama'            => 'Pocky Chocolate 40g',
                'harga_beli'      => 7500,
                'harga_jual'      => 9200,
                'stok'            => 40,
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'user_id'         => 1,
                'jenis_produk_id' => 1,
                'foto'            => null,
                'nama'            => 'SilverQueen Milk Chocolate 58g',
                'harga_beli'      => 13000,
                'harga_jual'      => 16500,
                'stok'            => 35,
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'user_id'         => 1,
                'jenis_produk_id' => 2, // Pastikan ID 2 ada di tabel jenis_produk (misal: Minuman)
                'foto'            => null,
                'nama'            => 'Indomaret Point Coffee Iced Palm Sugar',
                'harga_beli'      => 18000,
                'harga_jual'      => 25000,
                'stok'            => 30,
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'user_id'         => 1,
                'jenis_produk_id' => 2,
                'foto'            => null,
                'nama'            => 'Teh Botol Sosro Less Sugar 450ml',
                'harga_beli'      => 5000,
                'harga_jual'      => 6800,
                'stok'            => 60,
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
            [
                'user_id'         => 1,
                'jenis_produk_id' => 2,
                'foto'            => null,
                'nama'            => 'Aqua Air Mineral 600ml',
                'harga_beli'      => 2800,
                'harga_jual'      => 3800,
                'stok'            => 100,
                'created_at'      => now(),
                'updated_at'      => now(),
            ],
        ]);
    }
}