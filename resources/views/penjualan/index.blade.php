@extends('layouts.app')

@section('title', 'Penjualan - Toko Marika')

@section('content')

<style>
/* =========================================================
   TOKO MARIKA - MODERN PENJUALAN
   BABY BLUE POS DASHBOARD
========================================================= */

:root {
    --blue-50: #f5fcff;
    --blue-100: #eaf8fd;
    --blue-200: #d9f3fb;
    --blue-300: #b9e5f7;
    --blue-400: #89cff0;
    --blue-500: #5bbce4;
    --blue-600: #369fca;
    --blue-700: #247ba0;
    --blue-800: #155e75;

    --text-main: #294f5e;
    --text-muted: #7c99a4;

    --green: #19a974;
    --green-soft: #e5f8f0;

    --red: #e56f82;
    --red-dark: #d65368;
    --red-soft: #fff0f3;

    --white: #ffffff;
}

body {
    min-height: 100vh;
    background:
        radial-gradient(circle at 8% 8%, rgba(137, 207, 240, .22), transparent 28%),
        radial-gradient(circle at 92% 12%, rgba(91, 188, 228, .13), transparent 25%),
        linear-gradient(135deg, #f8fdff 0%, #eaf8fd 50%, #f8fdff 100%) !important;
}

.penjualan-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 40px 22px 60px;
}

.penjualan-header {
    position: relative;
    margin-bottom: 25px;
    padding-left: 2px;
}

.penjualan-header::before {
    content: "";
    display: block;
    width: 55px;
    height: 5px;
    margin-bottom: 12px;
    border-radius: 20px;
    background: linear-gradient(90deg, var(--blue-400), var(--blue-600));
}

.penjualan-title {
    margin: 0 0 6px;
    color: var(--blue-800);
    font-size: 34px;
    font-weight: 800;
    letter-spacing: -1px;
}

.penjualan-subtitle {
    margin: 0;
    color: var(--text-muted);
    font-size: 14.5px;
}

.sale-card {
    overflow: hidden;
    background: rgba(255, 255, 255, .96);
    border: 1px solid rgba(185, 229, 247, .75);
    border-radius: 22px;
    box-shadow: 0 18px 50px rgba(36, 123, 160, .10);
    animation: saleFade .5s ease;
}

.sale-card-top {
    padding: 25px 28px;
    border-bottom: 1px solid #e7f4f8;
    background: linear-gradient(180deg, #ffffff, #fbfeff);
}

.sale-heading {
    display: flex;
    align-items: center;
    gap: 12px;
    margin-bottom: 5px;
    color: var(--blue-800);
    font-size: 19px;
    font-weight: 800;
}

.sale-heading-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    color: white;
    border-radius: 12px;
    background: linear-gradient(135deg, var(--blue-400), var(--blue-600));
    box-shadow: 0 6px 15px rgba(91, 188, 228, .20);
}

.sale-heading-subtitle {
    margin: 0 0 20px 52px;
    color: var(--text-muted);
    font-size: 13px;
}

.total-box {
    display: flex;
    align-items: center;
    gap: 15px;
    padding: 15px 18px;
    border: 1px solid var(--blue-300);
    border-radius: 15px;
    background: linear-gradient(135deg, #f0fbff, #e3f7fd);
    box-shadow: 0 6px 18px rgba(91, 188, 228, .08);
}

.total-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    width: 44px;
    height: 44px;
    color: var(--blue-700);
    border-radius: 12px;
    background: rgba(255,255,255,.8);
    font-size: 20px;
}

.total-label {
    display: block;
    margin-bottom: 2px;
    color: var(--text-muted);
    font-size: 12px;
    font-weight: 600;
}

.total-value {
    display: block;
    color: var(--blue-700);
    font-size: 19px;
    font-weight: 800;
}

.btn-create {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;
    padding: 11px 18px;
    color: white;
    border: none;
    border-radius: 12px;
    background: linear-gradient(135deg, var(--blue-400), var(--blue-600));
    font-size: 13.5px;
    font-weight: 700;
    text-decoration: none;
    box-shadow: 0 7px 18px rgba(91,188,228,.23);
    transition: all .25s ease;
}

.btn-create:hover {
    color: white;
    transform: translateY(-2px);
    background: linear-gradient(135deg, var(--blue-500), var(--blue-700));
    box-shadow: 0 10px 22px rgba(36,123,160,.22);
}

.sale-card-body {
    padding: 28px;
}

.search-area {
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 20px;
    margin-bottom: 22px;
}

.search-title {
    margin: 0 0 4px;
    color: var(--text-main);
    font-size: 15px;
    font-weight: 800;
}

.search-description {
    margin: 0;
    color: var(--text-muted);
    font-size: 12.5px;
}

.search-form {
    display: flex;
    min-width: 390px;
    max-width: 500px;
    flex: 1;
}

.search-input-wrapper {
    position: relative;
    flex: 1;
}

.search-input-wrapper i {
    position: absolute;
    left: 14px;
    top: 50%;
    color: var(--blue-500);
    transform: translateY(-50%);
    pointer-events: none;
}

.search-form input {
    width: 100%;
    padding: 11px 15px 11px 40px;
    color: var(--text-main);
    border: 1.5px solid var(--blue-300);
    border-radius: 12px 0 0 12px;
    background: white;
    outline: none;
    transition: all .25s ease;
}

.search-form input::placeholder {
    color: #9ab6c0;
}

.search-form input:focus {
    border-color: var(--blue-500);
    box-shadow: 0 0 0 4px rgba(91,188,228,.10);
}

.btn-search {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    padding: 0 19px;
    color: var(--blue-700);
    border: 1.5px solid var(--blue-300);
    border-left: none;
    border-radius: 0 12px 12px 0;
    background: linear-gradient(135deg, #eefaff, #dff5fc);
    font-size: 13px;
    font-weight: 700;
    transition: all .25s ease;
}

.btn-search:hover {
    color: white;
    border-color: var(--blue-500);
    background: linear-gradient(135deg, var(--blue-400), var(--blue-600));
}

.table-container {
    overflow: hidden;
    border: 1px solid #dceff5;
    border-radius: 16px;
    box-shadow: 0 7px 22px rgba(36,123,160,.07);
}

.table-responsive {
    overflow-x: auto;
}

/* PERBAIKAN LEBAR TABEL */
.table {
    width: 100% !important;
    margin: 0;
    background: white;
    table-layout: auto;
}

.table thead th {
    padding: 12px 8px;
    color: white !important;
    background: linear-gradient(120deg, var(--blue-400), var(--blue-500)) !important;
    border: none !important;
    font-size: 11px;
    font-weight: 800;
    text-align: center;
    text-transform: uppercase;
    letter-spacing: .3px;
    white-space: nowrap;
}

.table thead th:first-child {
    border-radius: 15px 0 0 0;
}

.table thead th:last-child {
    border-radius: 0 15px 0 0;
}

.table tbody td {
    padding: 10px 8px;
    color: #486b77;
    vertical-align: middle;
    border-bottom: 1px solid #e7f3f7 !important;
    font-size: 12px;
}

.table tbody tr {
    transition: background .2s ease;
}

.table tbody tr:nth-child(even) td {
    background: #fbfeff;
}

.table tbody tr:hover td {
    background: #eefaff !important;
}

.table tbody tr:last-child td {
    border-bottom: none !important;
}

.tanggal-transaksi {
    color: var(--text-main);
    font-size: 11.5px;
    font-weight: 600;
    line-height: 1.3;
    white-space: nowrap;
}

.kasir-name {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: var(--blue-800);
    font-weight: 700;
    font-size: 12px;
    white-space: nowrap;
}

.kasir-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 24px;
    height: 24px;
    color: var(--blue-600);
    border-radius: 6px;
    background: var(--blue-100);
    font-size: 11px;
}

.produk-foto-item {
    display: flex;
    justify-content: center;
}

.produk-thumb {
    width: 38px;
    height: 38px;
    object-fit: cover;
    padding: 2px;
    border: 1.5px solid var(--blue-300);
    border-radius: 8px;
    background: white;
    transition: all .2s ease;
}

.produk-thumb:hover {
    transform: scale(1.08);
    border-color: var(--blue-500);
    box-shadow: 0 5px 12px rgba(91,188,228,.20);
}

.produk-thumb-empty {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 38px;
    height: 38px;
    color: var(--blue-600);
    border: 1px dashed var(--blue-300);
    border-radius: 8px;
    background: var(--blue-100);
    font-size: 12px;
}

.produk-item {
    color: #315f70;
    font-weight: 700;
    line-height: 1.25;
    font-size: 12px;
}

.jenis-item {
    display: inline-block;
    padding: 3px 7px;
    color: var(--blue-700);
    border: 1px solid var(--blue-200);
    border-radius: 6px;
    background: var(--blue-100);
    font-size: 11px;
    font-weight: 700;
    white-space: nowrap;
}

.qty-badge {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-width: 30px;
    padding: 4px 8px;
    color: var(--blue-700);
    border: 1px solid var(--blue-300);
    border-radius: 8px;
    background: #edfaff;
    font-size: 11.5px;
    font-weight: 800;
}

.total-payment {
    color: var(--blue-700);
    font-size: 12px;
    font-weight: 800;
    white-space: nowrap;
}

.payment-badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    padding: 4px 8px;
    color: #315f70;
    border: 1px solid #d8edf4;
    border-radius: 8px;
    background: #f5fcff;
    font-size: 11px;
    font-weight: 700;
    white-space: nowrap;
}

.payment-badge i {
    color: var(--blue-500);
}

.status {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 5px;
    padding: 4px 8px;
    border-radius: 20px;
    font-size: 10.5px;
    font-weight: 800;
    white-space: nowrap;
}

.status::before {
    content: "";
    width: 5px;
    height: 5px;
    border-radius: 50%;
    background: currentColor;
}

.completed {
    color: #147a5a;
    border: 1px solid #b6e8d6;
    background: var(--green-soft);
}

.open {
    color: var(--blue-700);
    border: 1px solid #b9e5f7;
    background: var(--blue-100);
}

.cancelled {
    color: #b4233c;
    border: 1px solid #f2c0c9;
    background: var(--red-soft);
}

.action-wrapper {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 4px;
}

.btn-detail,
.btn-delete {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    padding: 6px 8px;
    border-radius: 6px;
    font-size: 11px;
    font-weight: 700;
    transition: all .2s ease;
}

.btn-detail {
    color: white;
    border: none;
    background: linear-gradient(135deg, var(--blue-400), var(--blue-600));
    text-decoration: none;
}

.btn-detail:hover {
    color: white;
    transform: translateY(-2px);
    background: linear-gradient(135deg, var(--blue-500), var(--blue-700));
    box-shadow: 0 5px 12px rgba(91,188,228,.20);
}

.btn-delete {
    color: white;
    border: none;
    background: linear-gradient(135deg, #ed8999, #e16d81);
}

.btn-delete:hover {
    color: white;
    transform: translateY(-2px);
    background: linear-gradient(135deg, #e16d81, #d55368);
    box-shadow: 0 5px 12px rgba(225,109,129,.20);
}

.empty-state {
    padding: 70px 20px !important;
    background: white !important;
    text-align: center;
}

.empty-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 70px;
    height: 70px;
    margin: 0 auto 14px;
    color: var(--blue-500);
    border-radius: 20px;
    background: linear-gradient(135deg, #eaf8fd, #dff5fc);
    font-size: 30px;
}

.empty-title {
    margin: 0 0 5px;
    color: var(--text-main);
    font-size: 15px;
    font-weight: 800;
}

.empty-description {
    margin: 0;
    color: var(--text-muted);
    font-size: 12.5px;
}

.alert {
    border-radius: 13px;
    border: none;
    font-size: 13px;
    font-weight: 600;
}

.alert-success {
    color: #167457;
    background: #e7faf2;
    border: 1px solid #b8ead8;
}

.alert-danger {
    color: #b33e51;
    background: #fff0f3;
    border: 1px solid #f1c3cb;
}

.pagination {
    justify-content: flex-end;
    gap: 4px;
    margin: 0;
}

.pagination .page-link {
    min-width: 34px;
    text-align: center;
    color: var(--blue-700);
    border: 1px solid var(--blue-300);
    border-radius: 8px !important;
    background: white;
    transition: all .2s ease;
}

.pagination .page-link:hover {
    color: white;
    border-color: var(--blue-500);
    background: var(--blue-500);
    transform: translateY(-1px);
}

.pagination .active .page-link {
    color: white;
    border-color: var(--blue-500);
    background: linear-gradient(135deg, var(--blue-400), var(--blue-600));
    box-shadow: 0 4px 10px rgba(91,188,228,.18);
}

@keyframes saleFade {
    from {
        opacity: 0;
        transform: translateY(15px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media(max-width: 900px) {
    .penjualan-container {
        padding: 30px 15px 45px;
    }
    .penjualan-title {
        font-size: 28px;
    }
    .sale-card-top, .sale-card-body {
        padding: 20px;
    }
    .search-area {
        flex-direction: column;
        align-items: stretch;
    }
    .search-form {
        min-width: 100%;
        max-width: 100%;
    }
    .pagination {
        justify-content: center;
    }
}

@media(max-width: 576px) {
    .penjualan-title {
        font-size: 25px;
    }
    .penjualan-subtitle {
        font-size: 13px;
    }
    .sale-heading {
        font-size: 17px;
    }
    .sale-heading-subtitle {
        margin-left: 0;
    }
    .total-box {
        padding: 13px;
    }
    .btn-create {
        width: 100%;
    }
    .search-form {
        display: flex;
    }
    .btn-search {
        padding: 0 14px;
    }
}
</style>

<div class="penjualan-container">

    {{-- PAGE HEADER --}}
    <div class="penjualan-header">
        <h1 class="penjualan-title">Penjualan</h1>
        <p class="penjualan-subtitle">Kelola dan pantau seluruh transaksi</p>
    </div>

    {{-- MAIN CARD --}}
    <div class="sale-card">

        {{-- ALERT --}}
        @if(session('success'))
            <div class="px-4 pt-4">
                <div class="alert alert-success mb-0">
                    <i class="bi bi-check-circle-fill me-2"></i>
                    {{ session('success') }}
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="px-4 pt-4">
                <div class="alert alert-danger mb-0">
                    <i class="bi bi-exclamation-circle-fill me-2"></i>
                    {{ session('error') }}
                </div>
            </div>
        @endif

        {{-- CARD TOP --}}
        <div class="sale-card-top">
            <div class="sale-heading">
                <span class="sale-heading-icon">
                    <i class="bi bi-cart-check-fill"></i>
                </span>
                Riwayat Penjualan
            </div>
            <p class="sale-heading-subtitle">Daftar transaksi yang telah dilakukan di Toko Marika</p>

            {{-- STAT + BUTTON --}}
            <div class="row g-3 align-items-center">
                <div class="col-lg-8">
                    <div class="total-box">
                        <div class="total-icon">
                            <i class="bi bi-receipt-cutoff"></i>
                        </div>
                        <div>
                            <span class="total-label">Total Transaksi</span>
                            <span class="total-value">
                                {{ $sales->total() }}
                                <small style="font-size: 12px; font-weight: 600;">transaksi</small>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 text-lg-end">
                    <a href="{{ route('penjualan.create') }}" class="btn-create">
                        <i class="bi bi-plus-lg"></i>
                        Transaksi Baru
                    </a>
                </div>
            </div>
        </div>

        {{-- CARD BODY --}}
        <div class="sale-card-body">

            {{-- SEARCH --}}
            <div class="search-area">
                <div>
                    <h6 class="search-title">Cari Transaksi</h6>
                    <p class="search-description">Cari berdasarkan data penjualan yang tersedia</p>
                </div>

                <form action="{{ route('penjualan.index') }}" method="GET" class="search-form">
                    <div class="search-input-wrapper">
                        <i class="bi bi-search"></i>
                        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari penjualan...">
                    </div>
                    <button type="submit" class="btn-search">
                        <i class="bi bi-search"></i>
                        Cari
                    </button>
                </form>
            </div>

            {{-- TABLE --}}
            <div class="table-container">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th style="width: 12%;">Tanggal</th>
                                <th style="width: 13%;">Kasir</th>
                                <th style="width: 6%;">Foto</th>
                                <th style="width: 22%;">Nama Produk</th>
                                <th style="width: 10%;">Jenis</th>
                                <th style="width: 5%;">Qty</th>
                                <th style="width: 12%;">Total</th>
                                <th style="width: 9%;">Bayar</th>
                                <th style="width: 6%;">Status</th>
                                <th style="width: 5%;">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                        @forelse($sales as $penjualan)
                            @php
                                $validItems = $penjualan->itemPenjualan->filter(fn($item) => $item->produk);
                            @endphp
                            <tr>
                                {{-- TANGGAL --}}
                                <td>
                                    <div class="tanggal-transaksi">
                                        @if($penjualan->tanggal_transaksi)
                                            {{ \Carbon\Carbon::parse($penjualan->tanggal_transaksi)->format('d M Y') }}
                                            <br>
                                            <small style="color:#91aab3; font-weight:600;">
                                                {{ \Carbon\Carbon::parse($penjualan->tanggal_transaksi)->format('H:i:s') }}
                                            </small>
                                        @else
                                            {{ optional($penjualan->created_at)->format('d M Y') }}
                                            <br>
                                            <small style="color:#91aab3; font-weight:600;">
                                                {{ optional($penjualan->created_at)->format('H:i:s') }}
                                            </small>
                                        @endif
                                    </div>
                                </td>

                                {{-- KASIR --}}
                                <td>
                                    <span class="kasir-name">
                                        <span class="kasir-icon">
                                            <i class="bi bi-person-fill"></i>
                                        </span>
                                        {{ $penjualan->user->name ?? '-' }}
                                    </span>
                                </td>

                                {{-- FOTO PRODUK --}}
                                <td class="text-center">
                                    @if($validItems->count() > 0)
                                        @php $firstItem = $validItems->first(); @endphp
                                        <div class="produk-foto-item">
                                            @if($firstItem->produk->foto)
                                                <img src="{{ asset('storage/' . $firstItem->produk->foto) }}" alt="{{ $firstItem->produk->nama }}" class="produk-thumb">
                                            @else
                                                <div class="produk-thumb-empty">
                                                    <i class="bi bi-image"></i>
                                                </div>
                                            @endif
                                        </div>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>

                                {{-- NAMA PRODUK --}}
                                <td>
                                    @if($validItems->count() > 0)
                                        <div class="produk-item">
                                            {{ $validItems->first()->produk->nama }}
                                        </div>
                                        @if($validItems->count() > 1)
                                            <small class="text-muted fw-bold" style="font-size: 10.5px;">+{{ $validItems->count() - 1 }} produk lainnya</small>
                                        @endif
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>

                                {{-- JENIS PRODUK --}}
                                <td class="text-center">
                                    @if($validItems->count() > 0)
                                        <div class="jenis-item">
                                            {{ $validItems->first()->produk->jenisProduk->nama ?? '-' }}
                                        </div>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>

                                {{-- JUMLAH --}}
                                <td class="text-center">
                                    <span class="qty-badge">
                                        {{ $validItems->sum('qty') }}
                                    </span>
                                </td>

                                {{-- TOTAL --}}
                                <td>
                                    <span class="total-payment">
                                        Rp {{ number_format($penjualan->total_pembayaran ?? 0, 0, ',', '.') }}
                                    </span>
                                </td>

                                {{-- METODE PEMBAYARAN --}}
                                <td>
                                    <span class="payment-badge">
                                        <i class="bi bi-credit-card-fill"></i>
                                        {{ ucfirst($penjualan->metode_pembayaran ?? 'Tunai') }}
                                    </span>
                                </td>

                                {{-- STATUS --}}
                                <td class="text-center">
                                    @php
                                        $statusClass = match(strtolower($penjualan->status ?? 'completed')) {
                                            'completed', 'selesai' => 'completed',
                                            'open', 'pending' => 'open',
                                            default => 'cancelled'
                                        };
                                    @endphp
                                    <span class="status {{ $statusClass }}">
                                        {{ ucfirst($penjualan->status ?? 'Selesai') }}
                                    </span>
                                </td>

                                {{-- AKSI --}}
                                <td>
                                    <div class="action-wrapper">
                                        <a href="{{ route('penjualan.show', $penjualan->id) }}" class="btn-detail" title="Detail">
                                            <i class="bi bi-eye-fill"></i>
                                        </a>

                                        <form action="{{ route('penjualan.destroy', $penjualan->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?');" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn-delete" title="Hapus">
                                                <i class="bi bi-trash-fill"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="10" class="empty-state">
                                    <div class="empty-icon">
                                        <i class="bi bi-inbox"></i>
                                    </div>
                                    <h6 class="empty-title">Belum Ada Data Penjualan</h6>
                                    <p class="empty-description">Tidak ada riwayat transaksi penjualan yang ditemukan.</p>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- PAGINATION --}}
            @if($sales->hasPages())
                <div class="mt-4">
                    {{ $sales->links() }}
                </div>
            @endif

        </div>
    </div>
</div>

@endsection