<?php

namespace App\Services;

use App\Models\Produk;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class MonitoringStokService
{
    /*
    |--------------------------------------------------------------------------
    | PRODUK STOK RENDAH
    |--------------------------------------------------------------------------
    */

    public function produkStokRendah(Carbon|string $tanggal)
    {
        $tanggal = Carbon::parse($tanggal)->format('Y-m-d');

        return Produk::query()
            ->where('stok', '>', 0)
            ->where('stok', '<=', 10)
            ->whereExists(function ($query) use ($tanggal) {
                $query->select(DB::raw(1))
                    ->from('item_penjualan')
                    ->join(
                        'penjualan',
                        'item_penjualan.penjualan_id',
                        '=',
                        'penjualan.id'
                    )
                    ->whereColumn(
                        'item_penjualan.produk_id',
                        'produk.id'
                    )
                    ->whereDate(
                        'penjualan.tanggal_transaksi',
                        $tanggal
                    )
                    ->where(
                        'penjualan.status',
                        'SELESAI'
                    );
            })
            ->orderBy('stok', 'asc')
            ->get();
    }


    /*
    |--------------------------------------------------------------------------
    | PRODUK STOK HABIS
    |--------------------------------------------------------------------------
    */

    public function produkStokHabis(Carbon|string $tanggal)
    {
        $tanggal = Carbon::parse($tanggal)->format('Y-m-d');

        return Produk::query()
            ->where('stok', 0)
            ->whereExists(function ($query) use ($tanggal) {
                $query->select(DB::raw(1))
                    ->from('item_penjualan')
                    ->join(
                        'penjualan',
                        'item_penjualan.penjualan_id',
                        '=',
                        'penjualan.id'
                    )
                    ->whereColumn(
                        'item_penjualan.produk_id',
                        'produk.id'
                    )
                    ->whereDate(
                        'penjualan.tanggal_transaksi',
                        $tanggal
                    )
                    ->where(
                        'penjualan.status',
                        'SELESAI'
                    );
            })
            ->orderBy('nama', 'asc')
            ->get();
    }
}