@extends('layouts.app')

@section('title', 'Penjualan')

@section('content')

<style>

/* =========================
   BODY
========================== */

body {
    background: #eef8ff;
}


/* =========================
   JUDUL
========================== */

.page-title {
    color: #2196f3;
    font-weight: 800;
}


/* =========================
   CARD
========================== */

.panel-card {
    background: #fff;
    border: none;
    border-radius: 18px;

    box-shadow:
        0 8px 25px rgba(33, 150, 243, 0.15);

    overflow: hidden;
}


/* =========================
   HEADER CARD
========================== */

.panel-header {
    background:
        linear-gradient(
            135deg,
            #64b5f6,
            #90caf9
        );

    color: #fff;

    padding: 16px 20px;

    border: none;
}


.panel-header h5 {
    margin: 0;

    font-weight: 700;

    letter-spacing: .3px;

    display: flex;

    align-items: center;

    gap: 8px;
}


/* =========================
   TOMBOL KEMBALI
========================== */

.btn-kembali {
    display: flex;

    align-items: center;

    justify-content: center;

    gap: 7px;

    width: 100%;

    background: #fff;

    border: 2px solid #64b5f6;

    color: #1976d2;

    border-radius: 12px;

    font-weight: 600;

    padding: 10px 18px;

    text-decoration: none;

    transition: all .2s ease;
}


.btn-kembali:hover {
    background: #e3f2fd;

    border-color: #42a5f5;

    color: #1565c0;

    transform: translateY(-1px);
}


/* =========================
   SEARCH
========================== */

.search-box {
    border: 2px solid #bbdefb;

    border-radius: 12px;

    padding: 10px 14px;
}


.search-box:focus {
    border-color: #42a5f5;

    box-shadow:
        0 0 8px rgba(33, 150, 243, .35);
}


/* =========================
   PRODUK
========================== */

.produk-item {
    border: 1px solid #d6ecff !important;

    border-radius: 14px !important;

    background: #fafdff;

    transition:
        box-shadow .15s ease,
        transform .15s ease;
}


.produk-item:hover {
    box-shadow:
        0 6px 16px rgba(33, 150, 243, .18);

    transform: translateY(-2px);

    border-color: #90caf9 !important;
}


/* =========================
   ROW PRODUK
========================== */

.produk-row {
    display: flex;

    flex-wrap: nowrap;

    align-items: center;

    gap: 10px;
}


/* =========================
   FOTO PRODUK
========================== */

.produk-foto-wrap {
    flex: 0 0 auto;
}


.produk-foto {
    width: 56px;

    height: 56px;

    object-fit: cover;

    border-radius: 12px;

    border: 1px solid #90caf9;

    display: block;
}


.produk-foto-placeholder {
    width: 56px;

    height: 56px;

    border-radius: 12px;

    background: #e3f2fd;

    color: #1976d2;

    display: flex;

    align-items: center;

    justify-content: center;

    border: 1px solid #90caf9;
}


.produk-foto-placeholder i {
    font-size: 22px;
}


/* =========================
   INFO PRODUK
========================== */

.produk-info {
    flex: 1 1 auto;

    min-width: 0;
}


.produk-nama {
    color: #263238;

    font-weight: 700;

    white-space: nowrap;

    overflow: hidden;

    text-overflow: ellipsis;
}


.produk-harga {
    color: #2196f3;

    font-weight: 700;

    font-size: .85rem;

    white-space: nowrap;
}


.produk-stok {
    font-size: .72rem;

    font-weight: 600;

    white-space: nowrap;
}


.produk-stok.stok-aman {
    color: #2e7d32;
}


.produk-stok.stok-rendah {
    color: #e6a100;
}


.produk-stok.stok-habis {
    color: #d32f2f;
}


/* =========================
   QTY
========================== */

.qty-wrap {
    flex: 0 0 60px;
}


.qty-input {
    border: 2px solid #bbdefb;

    border-radius: 10px;

    text-align: center;

    padding: 6px 4px;

    width: 100%;
}


.qty-input:focus {
    border-color: #42a5f5;

    box-shadow:
        0 0 6px rgba(33, 150, 243, .3);
}


.qty-input:disabled {
    background: #f3f3f3;

    color: #aaa;
}


/* =========================
   TOMBOL TAMBAH
========================== */

.btn-tambah-wrap {
    flex: 0 0 auto;
}


.btn-tambah {
    background: #42a5f5;

    border: none;

    color: #fff;

    border-radius: 10px;

    font-weight: 600;

    white-space: nowrap;

    padding: 8px 14px;

    transition: all .2s ease;
}


.btn-tambah:hover {
    background: #1976d2;

    color: #fff;

    transform: translateY(-1px);
}


.btn-tambah:disabled {
    background: #b3d9f7;

    cursor: not-allowed;

    transform: none;
}


/* =========================
   TABLE KERANJANG
========================== */

.cart-table {
    margin-bottom: 0;
}


.cart-table thead th {
    background: #e3f2fd;

    color: #1976d2;

    text-transform: uppercase;

    font-size: .72rem;

    letter-spacing: .5px;

    border-bottom:
        2px solid #90caf9;
}


.cart-table tbody tr {
    transition: .15s ease;
}


.cart-table tbody tr:hover {
    background: #f1f9ff;
}


.cart-table td,
.cart-table th {
    vertical-align: middle;
}


/* =========================
   HAPUS ITEM
========================== */

.btn-hapus-item {
    background: #64b5f6;

    border: none;

    color: #fff;

    border-radius: 8px;

    transition: .2s;
}


.btn-hapus-item:hover {
    background: #1976d2;

    color: #fff;
}


/* =========================
   TOTAL
========================== */

.total-box {
    background:
        linear-gradient(
            135deg,
            #e3f2fd,
            #d6ecff
        );

    border: 2px solid #90caf9;

    border-radius: 14px;

    padding: 16px 20px;

    color: #1976d2;
}


.total-box h5 {
    color: #1565c0;
}


/* =========================
   PAYMENT
========================== */

.form-select-pink {
    border: 2px solid #bbdefb;

    border-radius: 12px;

    padding: 10px 12px;
}


.form-select-pink:focus {
    border-color: #42a5f5;

    box-shadow:
        0 0 8px rgba(33, 150, 243, .35);
}


/* =========================
   CHECKOUT
========================== */

.btn-checkout {
    background:
        linear-gradient(
            135deg,
            #42a5f5,
            #1976d2
        );

    border: none;

    color: #fff;

    border-radius: 12px;

    font-weight: 700;

    padding: 11px;

    transition: all .2s ease;
}


.btn-checkout:hover {
    filter: brightness(.95);

    color: #fff;

    transform: translateY(-1px);
}


.btn-checkout:disabled {
    opacity: .6;

    cursor: not-allowed;

    transform: none;
}


/* =========================
   BATAL
========================== */

.btn-batal {
    background: #fff;

    border: 2px solid #64b5f6;

    color: #1976d2;

    border-radius: 12px;

    font-weight: 600;

    padding: 10px;

    transition: all .2s ease;
}


.btn-batal:hover {
    background: #e3f2fd;

    color: #1565c0;

    transform: translateY(-1px);
}


/* =========================
   PEMISAH KEMBALI
========================== */

.kembali-wrapper {
    margin-top: 18px;

    padding-top: 15px;

    border-top: 1px solid #d6ecff;
}


/* =========================
   ALERT
========================== */

.alert {
    border-radius: 12px;

    border: none;
}


/* =========================
   RESPONSIVE
========================== */

@media (max-width: 768px) {

    .produk-row {
        flex-wrap: wrap;
    }


    .produk-info {
        min-width: 150px;
    }


    .qty-wrap {
        flex: 0 0 60px;
    }


    .btn-tambah-wrap {
        flex: 1;
    }


    .btn-tambah {
        width: 100%;
    }


    .panel-header {
        padding: 14px 16px;
    }


    .card-body {
        padding: 15px;
    }

}


/* =========================
   MOBILE KECIL
========================== */

@media (max-width: 480px) {

    .produk-foto {
        width: 50px;

        height: 50px;
    }


    .produk-foto-placeholder {
        width: 50px;

        height: 50px;
    }


    .produk-nama {
        font-size: 14px;
    }


    .produk-harga {
        font-size: 13px;
    }


    .qty-wrap {
        flex: 0 0 55px;
    }

}

</style>


<div class="container mt-4">


    {{-- =========================
         HEADER
    ========================== --}}

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3 class="page-title mb-0">

            <i class="bi bi-cart-check-fill me-2"></i>

            Penjualan

        </h3>

    </div>


    {{-- =========================
         ALERT SUCCESS
    ========================== --}}

    @if(session('success'))

        <div class="alert alert-success">

            <i class="bi bi-check-circle-fill me-2"></i>

            {{ session('success') }}

        </div>

    @endif


    {{-- =========================
         ALERT ERROR
    ========================== --}}

    @if(session('error'))

        <div class="alert alert-danger">

            <i class="bi bi-exclamation-triangle-fill me-2"></i>

            {{ session('error') }}

        </div>

    @endif


    <div class="row g-4">


        {{-- ==================================================
             DAFTAR PRODUK
        =================================================== --}}

        <div class="col-md-6">

            <div class="card panel-card h-100">


                {{-- HEADER PRODUK --}}

                <div class="panel-header">

                    <h5>

                        <i class="bi bi-bag-fill"></i>

                        Daftar Produk

                    </h5>

                </div>


                <div class="card-body">


                    {{-- =========================
                         SEARCH
                    ========================== --}}

                    <form method="GET">

                        <div class="input-group mb-3">

                            <span
                                class="input-group-text bg-white"
                                style="
                                    border:2px solid #bbdefb;
                                    border-right:0;
                                    border-radius:12px 0 0 12px;
                                "
                            >

                                <i class="bi bi-search text-primary"></i>

                            </span>


                            <input
                                type="text"
                                name="search"
                                class="form-control search-box"
                                placeholder="Cari produk..."
                                value="{{ request('search') }}"
                                style="
                                    border-left:0;
                                    border-radius:0 12px 12px 0;
                                "
                            >

                        </div>

                    </form>


                    {{-- =========================
                         PRODUK
                    ========================== --}}

                    @forelse($produks as $produk)

                        <form
                            action="{{ route('penjualan.store') }}"
                            method="POST"
                            class="produk-item p-2 mb-3"
                        >

                            @csrf


                            <input
                                type="hidden"
                                name="produk_id"
                                value="{{ $produk->id }}"
                            >


                            <div class="produk-row">


                                {{-- FOTO PRODUK --}}

                                <div class="produk-foto-wrap">

                                    @if($produk->foto)

                                        <img
                                            src="{{ asset('storage/'.$produk->foto) }}"
                                            alt="{{ $produk->nama }}"
                                            class="produk-foto"
                                        >

                                    @else

                                        <div class="produk-foto-placeholder">

                                            <i class="bi bi-image"></i>

                                        </div>

                                    @endif

                                </div>


                                {{-- INFO PRODUK --}}

                                <div class="produk-info">

                                    <div class="produk-nama">

                                        {{ $produk->nama }}

                                    </div>


                                    <div class="produk-harga">

                                        <i class="bi bi-tag-fill me-1"></i>

                                        Rp
                                        {{ number_format(
                                            $produk->harga_jual,
                                            0,
                                            ',',
                                            '.'
                                        ) }}

                                    </div>


                                    <div
                                        class="
                                            produk-stok

                                            @if($produk->stok <= 0)
                                                stok-habis
                                            @elseif($produk->stok <= 5)
                                                stok-rendah
                                            @else
                                                stok-aman
                                            @endif
                                        "
                                    >

                                        @if($produk->stok <= 0)

                                            <i class="bi bi-x-circle-fill me-1"></i>

                                            Stok habis

                                        @elseif($produk->stok <= 5)

                                            <i class="bi bi-exclamation-circle-fill me-1"></i>

                                            Stok: {{ $produk->stok }}

                                        @else

                                            <i class="bi bi-check-circle-fill me-1"></i>

                                            Stok: {{ $produk->stok }}

                                        @endif

                                    </div>

                                </div>


                                {{-- QTY --}}

                                <div class="qty-wrap">

                                    <input
                                        type="number"
                                        name="qty"
                                        value="{{ $produk->stok > 0 ? 1 : 0 }}"
                                        min="1"
                                        max="{{ $produk->stok }}"
                                        data-stok="{{ $produk->stok }}"
                                        class="qty-input"

                                        {{ $produk->stok <= 0 ? 'disabled' : '' }}

                                        oninput="
                                            let stok = parseInt(this.dataset.stok);
                                            let val = parseInt(this.value);

                                            if (isNaN(val) || val < 1) {
                                                this.value = 1;
                                            }

                                            if (val > stok) {
                                                this.value = stok;
                                            }
                                        "

                                        onblur="
                                            let stok = parseInt(this.dataset.stok);
                                            let val = parseInt(this.value);

                                            if (isNaN(val) || val < 1) {
                                                this.value = 1;
                                            }

                                            if (val > stok) {
                                                this.value = stok;
                                            }
                                        "
                                    >

                                </div>


                                {{-- TAMBAH --}}

                                <div class="btn-tambah-wrap">

                                    <button
                                        type="submit"
                                        class="btn btn-tambah"

                                        {{ $produk->stok <= 0 ? 'disabled' : '' }}
                                    >

                                        <i class="bi bi-plus-lg me-1"></i>

                                        Tambah

                                    </button>

                                </div>

                            </div>

                        </form>

                    @empty

                        <div class="alert alert-warning">

                            <i class="bi bi-search me-2"></i>

                            Produk tidak ditemukan

                        </div>

                    @endforelse


                </div>

            </div>

        </div>


        {{-- ==================================================
             KERANJANG BELANJA
        =================================================== --}}

        <div class="col-md-6">

            <div class="card panel-card h-100">


                {{-- HEADER KERANJANG --}}

                <div class="panel-header">

                    <h5>

                        <i class="bi bi-cart3"></i>

                        Keranjang Belanja

                    </h5>

                </div>


                <div class="card-body">


                    @php

                        $total = 0;

                    @endphp


                    {{-- =========================
                         TABEL KERANJANG
                    ========================== --}}

                    <div class="table-responsive">

                        <table class="table table-bordered cart-table">

                            <thead>

                                <tr>

                                    <th>
                                        Produk
                                    </th>

                                    <th class="text-center">
                                        Qty
                                    </th>

                                    <th>
                                        Subtotal
                                    </th>

                                    <th class="text-center">
                                        Aksi
                                    </th>

                                </tr>

                            </thead>


                            <tbody>

                                @forelse($keranjang as $item)

                                    @php

                                        $total += $item['subtotal'];

                                    @endphp


                                    <tr>

                                        <td class="fw-semibold">

                                            {{ $item['nama'] }}

                                        </td>


                                        <td class="text-center">

                                            {{ $item['qty'] }}

                                        </td>


                                        <td class="text-primary fw-semibold">

                                            Rp
                                            {{ number_format(
                                                $item['subtotal'],
                                                0,
                                                ',',
                                                '.'
                                            ) }}

                                        </td>


                                        <td class="text-center">

                                            <form
                                                action="{{
                                                    route(
                                                        'penjualan.destroyItem',
                                                        $item['produk_id']
                                                    )
                                                }}"
                                                method="POST"
                                                class="d-inline"
                                            >

                                                @csrf

                                                @method('DELETE')


                                                <button
                                                    type="submit"
                                                    class="btn btn-hapus-item btn-sm"
                                                    title="Hapus produk"
                                                >

                                                    <i class="bi bi-trash-fill"></i>

                                                    Hapus

                                                </button>

                                            </form>

                                        </td>

                                    </tr>

                                @empty

                                    <tr>

                                        <td
                                            colspan="4"
                                            class="text-center text-muted py-4"
                                        >

                                            <i
                                                class="bi bi-cart-x"
                                                style="font-size:30px;"
                                            ></i>

                                            <div class="mt-2">

                                                Keranjang kosong

                                            </div>

                                        </td>

                                    </tr>

                                @endforelse

                            </tbody>

                        </table>

                    </div>


                    {{-- =========================
                         TOTAL
                    ========================== --}}

                    <div
                        class="
                            total-box
                            mb-3
                            d-flex
                            justify-content-between
                            align-items-center
                        "
                    >

                        <span class="fw-bold">

                            <i class="bi bi-calculator-fill me-1"></i>

                            Total

                        </span>


                        <h5 class="mb-0 fw-bold">

                            Rp
                            {{ number_format(
                                $total,
                                0,
                                ',',
                                '.'
                            ) }}

                        </h5>

                    </div>


                    {{-- =========================
                         FORM CHECKOUT
                    ========================== --}}

                    <form
                        action="{{ route('penjualan.checkout') }}"
                        method="POST"
                    >

                        @csrf


                        {{-- METODE PEMBAYARAN --}}

                        <select
                            name="payment_method"
                            class="
                                form-select
                                form-select-pink
                                mb-3
                            "
                            required
                        >

                            <option value="">

                                Pilih Metode Pembayaran

                            </option>


                            <option value="cash">

                                Cash

                            </option>


                            <option value="transfer">

                                Transfer

                            </option>


                            <option value="qris">

                                QRIS

                            </option>

                        </select>


                        {{-- CHECKOUT --}}

                        <button
                            type="submit"
                            class="btn btn-checkout w-100"

                            {{ empty($keranjang) ? 'disabled' : '' }}
                        >

                            <i class="bi bi-check-circle-fill me-1"></i>

                            Checkout

                        </button>

                    </form>


                    {{-- =========================
                         BATALKAN TRANSAKSI
                    ========================== --}}

                    <form
                        action="{{ route('penjualan.cancel') }}"
                        method="POST"
                        class="mt-2"
                    >

                        @csrf


                        <button
                            type="submit"
                            class="btn btn-batal w-100"

                            onclick="
                                return confirm(
                                    'Yakin ingin membatalkan transaksi?'
                                )
                            "
                        >

                            <i class="bi bi-x-circle-fill me-1"></i>

                            Batalkan Transaksi

                        </button>

                    </form>


                    {{-- =========================
                         TOMBOL KEMBALI
                         PALING BAWAH CARD
                    ========================== --}}

                    <div class="kembali-wrapper">

                        <a
                            href="{{ route('penjualan.index') }}"
                            class="btn btn-kembali"
                        >

                            <i class="bi bi-arrow-left"></i>

                            Kembali

                        </a>

                    </div>


                </div>

            </div>

        </div>


    </div>

</div>

@endsection