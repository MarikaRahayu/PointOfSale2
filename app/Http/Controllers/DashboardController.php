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
    ) {
    }

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

        $hariIni = Carbon::today();

        if ($tanggalDipilih->greaterThan($hariIni)) {
            $tanggalDipilih = $hariIni->copy();
        }

        /*
        |--------------------------------------------------------------------------
        | RINGKASAN PENJUALAN
        |--------------------------------------------------------------------------
        */

        $ringkasan = $this->laporanService
            ->ringkasanTanggal($tanggalDipilih);

        /*
        |--------------------------------------------------------------------------
        | PRODUK TERLARIS
        |--------------------------------------------------------------------------
        */

        $produkTerlaris = $this->laporanService
            ->produkTerlarisTanggal($tanggalDipilih);

        /*
        |--------------------------------------------------------------------------
        | TANGGAL SEBELUMNYA
        |--------------------------------------------------------------------------
        |
        | Mundur tepat 1 hari.
        |
        */

        $tanggalSebelumnya = $tanggalDipilih
            ->copy()
            ->subDay();

        /*
        |--------------------------------------------------------------------------
        | TANGGAL SESUDAHNYA
        |--------------------------------------------------------------------------
        |
        | Maju tepat 1 hari.
        |
        */

        $tanggalSesudahnya = $tanggalDipilih
            ->copy()
            ->addDay();

        /*
        |--------------------------------------------------------------------------
        | JANGAN BOLEH > MELEWATI HARI INI
        |--------------------------------------------------------------------------
        */

        if ($tanggalSesudahnya->greaterThan($hariIni)) {
            $tanggalSesudahnya = null;
        }

        /*
        |--------------------------------------------------------------------------
        | DATA DASHBOARD
        |--------------------------------------------------------------------------
        */

        return view('dashboard', [

            /*
            | Tanggal yang sedang ditampilkan
            */
            'tanggalHariIni' => $tanggalDipilih,

            /*
            | Ringkasan penjualan
            */
            'ringkasan' => $ringkasan,

            /*
            | Produk terlaris
            */
            'produkTerlaris' => $produkTerlaris,

            /*
            | Produk stok rendah
            */
            'produkStokRendah' =>
                $this->stokService->produkStokRendah(),

            /*
            | Produk stok habis
            */
            'produkStokHabis' =>
                $this->stokService->produkStokHabis(),

            /*
            | Total jenis produk
            */
            'totalJenis' =>
                JenisProduk::count(),

            /*
            | Tombol <
            */
            'tanggalSebelumnya' =>
                $tanggalSebelumnya,

            /*
            | Tombol >
            */
            'tanggalSesudahnya' =>
                $tanggalSesudahnya,
        ]);
    }
}