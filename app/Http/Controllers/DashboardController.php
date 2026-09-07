<?php

namespace App\Http\Controllers;

use App\Models\JenisProduk;
use App\Services\LaporanPenjualanService;
use App\Services\MonitoringStokService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function __construct(
        protected LaporanPenjualanService $laporanPenjualanService,
        protected MonitoringStokService $monitoringStokService
    ) {
    }

    public function index(Request $request)
    {
        /*
        |--------------------------------------------------------------------------
        | TANGGAL YANG DIPILIH
        |--------------------------------------------------------------------------
        | Jika tidak ada ?tanggal=..., otomatis menggunakan tanggal hari ini.
        */
        $tanggalHariIni = $request->filled('tanggal')
            ? Carbon::parse($request->tanggal)
            : Carbon::today();

        /*
        |--------------------------------------------------------------------------
        | RINGKASAN PENJUALAN
        |--------------------------------------------------------------------------
        */
        $ringkasan = $this->laporanPenjualanService
            ->ringkasan($tanggalHariIni);

        /*
        |--------------------------------------------------------------------------
        | TRANSAKSI TERBARU
        |--------------------------------------------------------------------------
        */
        $transaksiTerbaru = $this->laporanPenjualanService
            ->transaksiTerbaru($tanggalHariIni);

        /*
        |--------------------------------------------------------------------------
        | BEST SELLER
        |--------------------------------------------------------------------------
        */
        $produkTerlaris = $this->laporanPenjualanService
            ->produkTerlaris($tanggalHariIni);

        /*
        |--------------------------------------------------------------------------
        | STOK RENDAH & HABIS
        |--------------------------------------------------------------------------
        */
        $produkStokRendah = $this->monitoringStokService
            ->produkStokRendah($tanggalHariIni);

        $produkStokHabis = $this->monitoringStokService
            ->produkStokHabis($tanggalHariIni);

        /*
        |--------------------------------------------------------------------------
        | TOTAL JENIS PRODUK
        |--------------------------------------------------------------------------
        */
        $totalJenis = JenisProduk::count();

        /*
        |--------------------------------------------------------------------------
        | TANGGAL SEBELUMNYA DAN SESUDAHNYA
        |--------------------------------------------------------------------------
        | Dibuat per hari.
        |
        | Contoh:
        | 7 September -> 6 September
        | 6 September -> 5 September
        |
        | Jadi tanggal yang tidak memiliki transaksi tetap bisa dibuka.
        |--------------------------------------------------------------------------
        */
        $tanggalSebelumnya = $tanggalHariIni->copy()->subDay();

        /*
        |--------------------------------------------------------------------------
        | TANGGAL SESUDAHNYA
        |--------------------------------------------------------------------------
        | Jangan izinkan maju ke tanggal masa depan.
        |--------------------------------------------------------------------------
        */
        $hariIni = Carbon::today();

        if ($tanggalHariIni->copy()->addDay()->lte($hariIni)) {
            $tanggalSesudahnya = $tanggalHariIni->copy()->addDay();
        } else {
            $tanggalSesudahnya = null;
        }

        return view('dashboard', compact(
            'tanggalHariIni',
            'ringkasan',
            'transaksiTerbaru',
            'produkTerlaris',
            'produkStokRendah',
            'produkStokHabis',
            'totalJenis',
            'tanggalSebelumnya',
            'tanggalSesudahnya'
        ));
    }
}