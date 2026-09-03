<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use App\Services\LaporanPenjualanService;
use App\Services\MonitoringStokService;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function __construct(
        protected LaporanPenjualanService $laporanService,
        protected MonitoringStokService $stokService
    ) {}

    public function index()
    {
        /*
        |--------------------------------------------------------------------------
        | TENTUKAN TANGGAL DASHBOARD
        |--------------------------------------------------------------------------
        */

        $tanggal = request('tanggal');

        if ($tanggal) {
            try {
                $tanggalDipilih = Carbon::createFromFormat(
                    'Y-m-d',
                    $tanggal
                )->startOfDay();
            } catch (\Exception $e) {
                $tanggalDipilih = Carbon::today();
            }
        } else {
            $tanggalDipilih = Carbon::today();
        }

        /*
        |--------------------------------------------------------------------------
        | JANGAN BOLEH MEMILIH TANGGAL SETELAH HARI INI
        |--------------------------------------------------------------------------
        */

        if ($tanggalDipilih->greaterThan(Carbon::today())) {
            $tanggalDipilih = Carbon::today();
        }

        /*
        |--------------------------------------------------------------------------
        | RINGKASAN PENJUALAN BERDASARKAN TANGGAL
        |--------------------------------------------------------------------------
        */

        $ringkasan = $this->laporanService
            ->ringkasanTanggal($tanggalDipilih);

        /*
        |--------------------------------------------------------------------------
        | PRODUK TERLARIS BERDASARKAN TANGGAL
        |--------------------------------------------------------------------------
        */

        $produkTerlaris = $this->laporanService
            ->produkTerlarisTanggal($tanggalDipilih);

        /*
        |--------------------------------------------------------------------------
        | TANGGAL TRANSAKSI SEBELUMNYA
        |--------------------------------------------------------------------------
        */

        $tanggalSebelumnya = $this->laporanService
            ->tanggalSebelumnya($tanggalDipilih);

        /*
        |--------------------------------------------------------------------------
        | TANGGAL TRANSAKSI SESUDAHNYA
        |--------------------------------------------------------------------------
        */

        $tanggalSesudahnya = $this->laporanService
            ->tanggalSesudahnya($tanggalDipilih);

        /*
        |--------------------------------------------------------------------------
        | DATA DASHBOARD
        |--------------------------------------------------------------------------
        */

        return view('dashboard', [

            // Tanggal yang sedang ditampilkan
            'tanggalHariIni' => $tanggalDipilih,

            // Ringkasan penjualan tanggal tersebut
            'ringkasan' => $ringkasan,

            // Produk terlaris tanggal tersebut
            'produkTerlaris' => $produkTerlaris,

            // Monitoring stok tetap berdasarkan kondisi stok sekarang
            'produkStokRendah' =>
                $this->stokService->produkStokRendah(),

            'produkStokHabis' =>
                $this->stokService->produkStokHabis(),

            // Total jenis produk
            'totalJenis' =>
                JenisProduk::count(),

            // Navigasi tanggal
            'tanggalSebelumnya' =>
                $tanggalSebelumnya,

            'tanggalSesudahnya' =>
                $tanggalSesudahnya,
        ]);
    }
}