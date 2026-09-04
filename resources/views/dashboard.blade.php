@extends('layouts.app')

@section('title','Dashboard')

@section('content')

<style>

/* =========================================================
   BABY BLUE DASHBOARD
========================================================= */

:root {
    --baby-blue: #89CFF0;
    --blue-main: #5BBCE4;
    --blue-dark: #247BA0;
    --blue-deep: #155E75;
    --blue-light: #F0FAFF;
    --blue-soft: #E3F6FD;
    --blue-border: #B9E5F7;
    --white: #ffffff;
}

/* =========================================================
   PAGE
========================================================= */

body {
    background: #f4fbff;
}

/* =========================================================
   WELCOME CARD
========================================================= */

.welcome-card {
    background: linear-gradient(
        135deg,
        #B8E7FA 0%,
        #89CFF0 45%,
        #5BBCE4 100%
    );

    border-radius: 22px;
    padding: 28px 32px;
    display: flex;
    align-items: center;
    gap: 20px;

    box-shadow:
        0 12px 30px rgba(91, 188, 228, 0.30);

    margin-bottom: 30px;
    animation: fadeInDown .6s ease;

    position: relative;
    overflow: hidden;
}

.welcome-card::before {
    content: "";
    position: absolute;

    width: 180px;
    height: 180px;

    background: rgba(255,255,255,0.18);

    border-radius: 50%;

    right: -60px;
    top: -70px;
}

.welcome-card::after {
    content: "";
    position: absolute;

    width: 120px;
    height: 120px;

    background: rgba(255,255,255,0.12);

    border-radius: 50%;

    right: 100px;
    bottom: -70px;
}

/* =========================================================
   WELCOME TEXT
========================================================= */

.welcome-text {
    position: relative;
    z-index: 2;
}

.welcome-text h3 {
    color: white;
    font-weight: 800;

    margin-bottom: 8px;

    font-size: 25px;

    text-shadow:
        0 2px 5px rgba(0,0,0,0.10);
}

/* =========================================================
   ROLE
========================================================= */

.welcome-role {
    display: inline-block;

    padding: 6px 18px;

    border-radius: 30px;

    font-size: 13px;

    font-weight: 700;

    letter-spacing: .5px;

    text-transform: uppercase;

    box-shadow:
        0 3px 8px rgba(0,0,0,0.08);
}

.role-admin {
    background: #FFF4CC;
    color: #8A6D00;
}

.role-kasir {
    background: #D9F7E8;
    color: #087A45;
}

.role-default {
    background: #FFFFFF;
    color: var(--blue-dark);
}

/* =========================================================
   MAIN CARD
========================================================= */

.container > .card {
    background: var(--blue-light) !important;
}

/* =========================================================
   SECTION TITLE
========================================================= */

.text-center h1 {
    color: var(--blue-dark) !important;

    font-weight: 800;

    letter-spacing: .3px;
}

.text-center h4 {
    color: #6c757d !important;
}

.text-center h2 {
    color: var(--blue-main) !important;

    font-weight: 800;
}

/* =========================================================
   ALL CARDS
========================================================= */

.card {
    border: none !important;

    border-radius: 18px !important;

    overflow: hidden;

    transition:
        transform .25s ease,
        box-shadow .25s ease;
}

.card:hover {
    transform: translateY(-3px);

    box-shadow:
        0 12px 28px rgba(91, 188, 228, 0.18) !important;
}

/* =========================================================
   CARD HEADER
========================================================= */

.card-header {
    background: linear-gradient(
        135deg,
        #89CFF0,
        #5BBCE4
    ) !important;

    border: none !important;

    padding: 15px 18px;

    font-size: 15px;

    letter-spacing: .2px;
}

/* =========================================================
   CARD BODY
========================================================= */

.card-body {
    background: #F8FDFF !important;
}

/* =========================================================
   SALES NUMBER
========================================================= */

.card-body h1 {
    color: var(--blue-dark) !important;

    font-weight: 800;

    font-size: 30px;
}

/* =========================================================
   TABLE
========================================================= */

.table {
    border-color: var(--blue-border) !important;

    margin-bottom: 0;
}

.table thead th {
    font-weight: 700;

    vertical-align: middle;
}

.table-danger {
    --bs-table-bg: #DDF4FC !important;
    --bs-table-color: #155E75 !important;
}

.table-warning {
    --bs-table-bg: #E5F7FD !important;
    --bs-table-color: #155E75 !important;
}

.table-success {
    --bs-table-bg: #DDF4FC !important;
    --bs-table-color: #155E75 !important;
}

/* =========================================================
   HEADER PRODUK HABIS
========================================================= */

.table-blue {
    background: #DDF4FC !important;

    color: #155E75 !important;
}

.table-blue th {
    background: #DDF4FC !important;

    color: #155E75 !important;
}

/* =========================================================
   ISI TABEL
========================================================= */

.table tbody tr {
    transition:
        background .2s ease;
}

.table tbody tr:hover {
    background: #F0FAFF !important;
}

.table td,
.table th {
    border-color: var(--blue-border) !important;

    padding: 12px;
}

/* =========================================================
   EMPTY DATA
========================================================= */

.empty-data {
    text-align: center;

    color: #777;

    padding: 18px !important;
}

/* =========================================================
   PAYMENT STATUS
========================================================= */

.text-success {
    color: #159A75 !important;
}

.text-primary {
    color: var(--blue-dark) !important;
}

/* =========================================================
   PAGINATION
========================================================= */

.pagination .page-link {
    color: var(--blue-dark);

    border-color: var(--blue-border);

    background: white;
}

.pagination .page-link:hover {
    color: white;

    background: var(--blue-main);

    border-color: var(--blue-main);
}

.pagination .active .page-link {
    background: var(--blue-main);

    border-color: var(--blue-main);
}

/* =========================================================
   SHADOW
========================================================= */

.shadow {
    box-shadow:
        0 6px 20px rgba(36, 123, 160, 0.10) !important;
}

.shadow-lg {
    box-shadow:
        0 10px 30px rgba(36, 123, 160, 0.12) !important;
}

/* =========================================================
   SECTION SPACING
========================================================= */

.mt-5 {
    margin-top: 2.5rem !important;
}

/* =========================================================
   ANIMATION
========================================================= */

@keyframes fadeInDown {

    from {
        opacity: 0;

        transform:
            translateY(-15px);
    }

    to {
        opacity: 1;

        transform:
            translateY(0);
    }
}

/* =========================================================
   TOMBOL < DAN >
========================================================= */

.date-navigation {
    display: flex;

    justify-content: center;

    align-items: center;

    gap: 12px;

    margin-top: 25px;

    margin-bottom: 5px;
}

.date-navigation a {
    width: 42px;

    height: 42px;

    display: flex;

    align-items: center;

    justify-content: center;

    text-decoration: none;

    background: #E3F6FD;

    color: #247BA0;

    border: 1px solid #B9E5F7;

    border-radius: 10px;

    font-size: 24px;

    font-weight: 700;

    transition: all .2s ease;
}

.date-navigation a:hover {
    background: #5BBCE4;

    color: white;

    transform: translateY(-2px);

    box-shadow:
        0 5px 12px rgba(91, 188, 228, 0.25);
}

.date-navigation .disabled {
    width: 42px;

    height: 42px;

    display: flex;

    align-items: center;

    justify-content: center;

    background: #f1f5f9;

    color: #cbd5e1;

    border: 1px solid #e2e8f0;

    border-radius: 10px;

    font-size: 24px;

    font-weight: 700;
}

/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 768px) {

    .welcome-card {
        padding: 22px;
    }

    .welcome-text h3 {
        font-size: 20px;
    }

    .card-body h1 {
        font-size: 25px;
    }

}

</style>


<!-- =========================================================
     CONTAINER
========================================================= -->

<div class="container mt-4">

    <div
        class="card border-0 shadow-lg rounded-4"
        style="background:#fff0f6;"
    >

        <div class="card-body p-5">


            <!-- =================================================
                 ROLE USER
            ================================================== -->

            @php

                $roleName =
                    optional(auth()->user()->role)->name ?? '-';

                $roleClass =
                    match(strtolower($roleName)) {

                        'admin' => 'role-admin',

                        'kasir' => 'role-kasir',

                        default => 'role-default',

                    };

            @endphp


            <!-- =================================================
                 WELCOME
            ================================================== -->

            <div class="welcome-card">

                <div class="welcome-text">

                    <h3>

                        Selamat Datang,
                        {{ auth()->user()->name }} 👋

                    </h3>

                    <span class="welcome-role {{ $roleClass }}">

                        {{ ucfirst($roleName) }}

                    </span>

                </div>

            </div>


            <!-- =================================================
                 JUDUL DAN TANGGAL
            ================================================== -->

            <div class="text-center mb-5">

                <h1 class="fw-bold">

                    Ringkasan Penjualan

                </h1>

                <h4 class="text-secondary">

                    (

                    {{
                        $tanggalHariIni
                            ->locale('id')
                            ->translatedFormat('l, d F Y')
                    }}

                    )

                </h4>

                <h2 class="mt-3 fw-bold">

                    Today's Sales

                </h2>

            </div>


            <!-- =================================================
                 RINGKASAN PENJUALAN
            ================================================== -->

            <div class="row g-4">

                <!-- TOTAL PENJUALAN -->

                <div class="col-md-6">

                    <div
                        class="card border-0 shadow rounded-4 h-100"
                    >

                        <div
                            class="card-header text-white text-center fw-bold"
                        >

                            💰 Total Nilai Penjualan

                        </div>

                        <div
                            class="card-body text-center py-5"
                        >

                            <h1 class="fw-bold">

                                Rp

                                {{
                                    number_format(
                                        $ringkasan['total_penjualan'] ?? 0,
                                        0,
                                        ',',
                                        '.'
                                    )
                                }}

                            </h1>

                        </div>

                    </div>

                </div>


                <!-- JUMLAH TRANSAKSI -->

                <div class="col-md-6">

                    <div
                        class="card border-0 shadow rounded-4 h-100"
                    >

                        <div
                            class="card-header text-white text-center fw-bold"
                        >

                            🧾 Jumlah Transaksi

                        </div>

                        <div
                            class="card-body text-center py-5"
                        >

                            <h1 class="fw-bold">

                                {{
                                    $ringkasan['total_transaksi'] ?? 0
                                }}

                            </h1>

                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 CASH & PAYMENT STATUS
            ================================================== -->

            <div class="mt-5">

                <div
                    class="card border-0 shadow rounded-4"
                >

                    <div
                        class="card-header text-white text-center fw-bold"
                    >

                        💳 Cash & Payment Status

                    </div>

                    <div class="card-body">

                        <div class="row">

                            <!-- CASH -->

                            <div class="col-md-6">

                                <table
                                    class="table table-bordered text-center"
                                >

                                    <thead class="table-danger">

                                        <tr>

                                            <th>
                                                Total Pembayaran Tunai
                                            </th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>

                                            <td
                                                class="fw-bold text-success"
                                            >

                                                Rp

                                                {{
                                                    number_format(
                                                        $ringkasan['total_cash'] ?? 0,
                                                        0,
                                                        ',',
                                                        '.'
                                                    )
                                                }}

                                            </td>

                                        </tr>

                                    </tbody>

                                </table>

                            </div>


                            <!-- NON CASH -->

                            <div class="col-md-6">

                                <table
                                    class="table table-bordered text-center"
                                >

                                    <thead class="table-danger">

                                        <tr>

                                            <th>
                                                Total Pembayaran Non Tunai
                                            </th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        <tr>

                                            <td
                                                class="fw-bold text-primary"
                                            >

                                                Rp

                                                {{
                                                    number_format(
                                                        $ringkasan['total_non_tunai'] ?? 0,
                                                        0,
                                                        ',',
                                                        '.'
                                                    )
                                                }}

                                            </td>

                                        </tr>

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 CRITICAL INVENTORY
            ================================================== -->

            <div class="mt-5">

                <div
                    class="card border-0 shadow rounded-4"
                >

                    <div
                        class="card-header text-white text-center fw-bold"
                    >

                        ⚠️ Critical Inventory Status

                    </div>

                    <div class="card-body">

                        <div class="row">

                            <!-- PRODUK STOK RENDAH -->

                            <div class="col-md-6">

                                <table
                                    class="table table-bordered"
                                >

                                    <thead class="table-warning">

                                        <tr>

                                            <th>
                                                Daftar Produk Rendah
                                            </th>

                                            <th>
                                                Stok
                                            </th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        @forelse(
                                            $produkStokRendah
                                            as $produk
                                        )

                                            @if(
                                                $produk->stok > 0 &&
                                                $produk->stok <= 10
                                            )

                                                <tr>

                                                    <td>
                                                        {{ $produk->nama }}
                                                    </td>

                                                    <td
                                                        class="text-center fw-bold"
                                                    >
                                                        {{ $produk->stok }}
                                                    </td>

                                                </tr>

                                            @endif

                                        @empty

                                            <tr>

                                                <td
                                                    colspan="2"
                                                    class="empty-data"
                                                >
                                                    Belum ada data
                                                </td>

                                            </tr>

                                        @endforelse

                                    </tbody>

                                </table>

                            </div>


                            <!-- PRODUK HABIS -->

                            <div class="col-md-6">

                                <table
                                    class="table table-bordered"
                                >

                                    <thead class="table-blue">

                                        <tr>

                                            <th>
                                                Produk Habis
                                            </th>

                                        </tr>

                                    </thead>

                                    <tbody>

                                        @forelse(
                                            $produkStokHabis
                                            as $produk
                                        )

                                            @if($produk->stok == 0)

                                                <tr>

                                                    <td>
                                                        {{ $produk->nama }}
                                                    </td>

                                                </tr>

                                            @endif

                                        @empty

                                            <tr>

                                                <td
                                                    class="empty-data"
                                                >
                                                    Tidak ada produk habis.
                                                </td>

                                            </tr>

                                        @endforelse

                                    </tbody>

                                </table>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 BEST SELLER
            ================================================== -->

            <div class="mt-5">

                <div
                    class="card border-0 shadow rounded-4"
                >

                    <div
                        class="card-header text-white text-center fw-bold"
                    >

                        🏆 Best Seller Produk

                    </div>

                    <div class="card-body">

                        <table
                            class="table table-bordered table-hover"
                        >

                            <thead class="table-success">

                                <tr>

                                    <th>No</th>

                                    <th>Nama Produk</th>

                                    <th>Jumlah Terjual</th>

                                </tr>

                            </thead>

                            <tbody>

                                @forelse(
                                    $produkTerlaris
                                    as $index => $produk
                                )

                                    <tr>

                                        <td>
                                            {{ $index + 1 }}
                                        </td>

                                        <td>
                                            {{ $produk->nama }}
                                        </td>

                                        <td>
                                            {{ $produk->total_terjual }}
                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td
                                            colspan="3"
                                            class="text-center"
                                        >
                                            Belum ada data penjualan
                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>


            <!-- =================================================
                 TOMBOL < DAN > PALING BAWAH
                 PERBAIKAN PAGINATION TANGGAL
            ================================================== -->

            @php
                /*
                 * Ambil tanggal aktif yang sedang ditampilkan.
                 * Jika DashboardController sudah mengirim $tanggalHariIni,
                 * gunakan tanggal tersebut.
                 */
                $tanggalAktif = \Carbon\Carbon::parse($tanggalHariIni)->startOfDay();

                /*
                 * Cari tanggal transaksi yang benar-benar ada di database.
                 * Tombol < akan menuju transaksi sebelumnya.
                 * Tombol > akan menuju transaksi sesudahnya.
                 */
                $tanggalSebelumnya = \App\Models\Penjualan::query()
                    ->whereDate('created_at', '<', $tanggalAktif)
                    ->orderBy('created_at', 'desc')
                    ->value('created_at');

                $tanggalSesudahnya = \App\Models\Penjualan::query()
                    ->whereDate('created_at', '>', $tanggalAktif)
                    ->orderBy('created_at', 'asc')
                    ->value('created_at');

                $tanggalSebelumnya = $tanggalSebelumnya
                    ? \Carbon\Carbon::parse($tanggalSebelumnya)
                    : null;

                $tanggalSesudahnya = $tanggalSesudahnya
                    ? \Carbon\Carbon::parse($tanggalSesudahnya)
                    : null;
            @endphp

            <div class="date-navigation">

                {{-- TRANSAKSI SEBELUMNYA --}}

                @if($tanggalSebelumnya)

                    <a
                        href="{{ request()->url() }}?tanggal={{ $tanggalSebelumnya->format('Y-m-d') }}"
                        title="Transaksi tanggal sebelumnya"
                    >
                        &lt;
                    </a>

                @else

                    <span
                        class="disabled"
                        title="Tidak ada transaksi sebelumnya"
                    >
                        &lt;
                    </span>

                @endif


                {{-- TRANSAKSI BERIKUTNYA --}}

                @if($tanggalSesudahnya)

                    <a
                        href="{{ request()->url() }}?tanggal={{ $tanggalSesudahnya->format('Y-m-d') }}"
                        title="Transaksi tanggal berikutnya"
                    >
                        &gt;
                    </a>

                @else

                    <span
                        class="disabled"
                        title="Tidak ada transaksi berikutnya"
                    >
                        &gt;
                    </span>

                @endif

            </div>


        </div>

    </div>

</div>

@endsection