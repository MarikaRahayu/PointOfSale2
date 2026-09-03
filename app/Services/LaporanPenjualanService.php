<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class LaporanPenjualanService
{
    /*
    |--------------------------------------------------------------------------
    | RINGKASAN PENJUALAN BERDASARKAN TANGGAL
    |--------------------------------------------------------------------------
    */

    public function ringkasanTanggal(Carbon $tanggal): array
    {
        $tanggal = $tanggal->format('Y-m-d');

        $data = DB::table('penjualan')
            ->whereDate('created_at', $tanggal)
            ->selectRaw('
                COUNT(*) AS total_transaksi,

                COALESCE(
                    SUM(total_pembayaran),
                    0
                ) AS total_penjualan,

                COALESCE(
                    SUM(
                        CASE
                            WHEN UPPER(metode_pembayaran) = "CASH"
                            THEN total_pembayaran
                            ELSE 0
                        END
                    ),
                    0
                ) AS total_cash,

                COALESCE(
                    SUM(
                        CASE
                            WHEN UPPER(metode_pembayaran) <> "CASH"
                            THEN total_pembayaran
                            ELSE 0
                        END
                    ),
                    0
                ) AS total_non_tunai
            ')
            ->first();

        return [
            'total_transaksi' => (int) ($data->total_transaksi ?? 0),

            'total_penjualan' => (float) ($data->total_penjualan ?? 0),

            'total_cash' => (float) ($data->total_cash ?? 0),

            'total_non_tunai' => (float) ($data->total_non_tunai ?? 0),
        ];
    }


    /*
    |--------------------------------------------------------------------------
    | PRODUK TERLARIS BERDASARKAN TANGGAL
    |--------------------------------------------------------------------------
    */

    public function produkTerlarisTanggal(
        Carbon $tanggal,
        int $limit = 5
    ) {
        $tanggal = $tanggal->format('Y-m-d');

        return DB::table('item_penjualan')

            ->join(
                'penjualan',
                'penjualan.id',
                '=',
                'item_penjualan.penjualan_id'
            )

            ->join(
                'produk',
                'produk.id',
                '=',
                'item_penjualan.produk_id'
            )

            ->whereDate(
                'penjualan.created_at',
                $tanggal
            )

            ->select(
                'produk.id',
                'produk.nama'
            )

            ->selectRaw(
                'SUM(item_penjualan.qty) AS total_terjual'
            )

            ->groupBy(
                'produk.id',
                'produk.nama'
            )

            ->orderByDesc('total_terjual')

            ->limit($limit)

            ->get();
    }


    /*
    |--------------------------------------------------------------------------
    | MENCARI TANGGAL TRANSAKSI SEBELUMNYA
    |--------------------------------------------------------------------------
    */

    public function tanggalSebelumnya(Carbon $tanggal)
    {
        $tanggalSekarang = $tanggal->format('Y-m-d');

        $hasil = DB::table('penjualan')

            ->whereDate(
                'created_at',
                '<',
                $tanggalSekarang
            )

            ->selectRaw(
                'DATE(created_at) AS tanggal'
            )

            ->groupBy(
                DB::raw('DATE(created_at)')
            )

            ->orderByDesc('tanggal')

            ->first();

        if (!$hasil) {
            return null;
        }

        return Carbon::createFromFormat(
            'Y-m-d',
            $hasil->tanggal
        )->startOfDay();
    }


    /*
    |--------------------------------------------------------------------------
    | MENCARI TANGGAL TRANSAKSI SESUDAHNYA
    |--------------------------------------------------------------------------
    */

    public function tanggalSesudahnya(Carbon $tanggal)
    {
        $tanggalSekarang = $tanggal->format('Y-m-d');

        $hasil = DB::table('penjualan')

            ->whereDate(
                'created_at',
                '>',
                $tanggalSekarang
            )

            ->selectRaw(
                'DATE(created_at) AS tanggal'
            )

            ->groupBy(
                DB::raw('DATE(created_at)')
            )

            ->orderBy('tanggal')

            ->first();

        if (!$hasil) {
            return null;
        }

        return Carbon::createFromFormat(
            'Y-m-d',
            $hasil->tanggal
        )->startOfDay();
    }


    /*
    |--------------------------------------------------------------------------
    | METHOD LAMA
    |--------------------------------------------------------------------------
    */

    public function ringkasanHariIni(): array
    {
        return $this->ringkasanTanggal(
            Carbon::today()
        );
    }


    /*
    |--------------------------------------------------------------------------
    | METHOD LAMA PRODUK TERLARIS
    |--------------------------------------------------------------------------
    */

    public function produkTerlarisHariIni($limit = 5)
    {
        return $this->produkTerlarisTanggal(
            Carbon::today(),
            $limit
        );
    }
}