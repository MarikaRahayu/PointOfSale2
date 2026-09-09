<?php

namespace App\Services;

use App\Models\Penjualan;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class LaporanPenjualanService
{
    /**
     * Ringkasan penjualan berdasarkan tanggal.
     */
    public function ringkasan(Carbon|string $tanggal): array
    {
        $tanggal = Carbon::parse($tanggal)->toDateString();

        $query = Penjualan::query()
            ->whereDate('tanggal_transaksi', $tanggal)
            ->whereRaw('UPPER(status) = ?', ['SELESAI']);

        return [
            'total_transaksi' => (clone $query)->count(),

            'total_penjualan' => (clone $query)
                ->sum('total_pembayaran'),

            'total_cash' => (clone $query)
                ->whereRaw('UPPER(metode_pembayaran) = ?', ['CASH'])
                ->sum('total_pembayaran'),

            'total_non_tunai' => (clone $query)
                ->whereRaw('UPPER(metode_pembayaran) <> ?', ['CASH'])
                ->sum('total_pembayaran'),
        ];
    }


    /**
     * Menampilkan transaksi berdasarkan tanggal.
     */
    public function transaksiTerbaru(Carbon|string $tanggal)
    {
        $tanggal = Carbon::parse($tanggal)->toDateString();

        return Penjualan::with('user')
            ->whereDate('tanggal_transaksi', $tanggal)
            ->whereRaw('UPPER(status) = ?', ['SELESAI'])
            ->orderByDesc('tanggal_transaksi')
            ->get();
    }


    /**
     * Menampilkan produk terlaris berdasarkan tanggal.
     */
    public function produkTerlaris(Carbon|string $tanggal)
    {
        $tanggal = Carbon::parse($tanggal)->toDateString();

        return DB::table('item_penjualan')
            ->join(
                'penjualan',
                'item_penjualan.penjualan_id',
                '=',
                'penjualan.id'
            )
            ->join(
                'produk',
                'item_penjualan.produk_id',
                '=',
                'produk.id'
            )
            ->whereDate('penjualan.tanggal_transaksi', $tanggal)
            ->whereRaw('UPPER(penjualan.status) = ?', ['SELESAI'])
            ->select(
                'produk.id',
                'produk.nama',
                DB::raw('SUM(item_penjualan.qty) as total_terjual')
            )
            ->groupBy(
                'produk.id',
                'produk.nama'
            )
            ->orderByDesc('total_terjual')
            ->limit(10)
            ->get();
    }
}
