@extends('layouts.app')

@section('title', 'Detail Penjualan')

@section('content')

<style>

/* =========================================================
   HALAMAN DETAIL PENJUALAN
========================================================= */

body {
    background: #f4fbff;
}

.detail-container {
    max-width: 1100px;
    margin: 30px auto;
}

.detail-card {
    background: white;
    border-radius: 20px;
    padding: 30px;
    box-shadow: 0 8px 25px rgba(66, 165, 245, 0.12);
}


/* =========================================================
   INFORMASI TRANSAKSI
========================================================= */

.page-title {
    color: #1976D2;
    font-weight: 700;
}

.page-subtitle {
    color: #6c757d;
}

.info-box {
    background: #f0faff;
    border-radius: 15px;
    padding: 18px;
    height: 100%;
    border: 1px solid #d9f2fc;
}

.info-label {
    color: #6c757d;
    font-size: 13px;
    margin-bottom: 5px;
}

.info-value {
    color: #155E75;
    font-size: 16px;
    font-weight: 600;
}


/* =========================================================
   TABLE PRODUK
========================================================= */

.table-container {
    margin-top: 30px;
}

.table thead th {
    background: #42A5F5;
    color: white;
    border: none;
}

.table tbody td {
    vertical-align: middle;
}

.product-name {
    color: #155E75;
    font-weight: 600;
}


/* =========================================================
   STATUS
========================================================= */

.badge-status {
    display: inline-block;
    padding: 7px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
}

.status-selesai {
    background: #d1f7df;
    color: #198754;
}

.status-pending {
    background: #fff3cd;
    color: #856404;
}

.status-batal {
    background: #f8d7da;
    color: #842029;
}

.status-default {
    background: #e9ecef;
    color: #495057;
}

.payment-badge {
    background: #eaf4ff;
    color: #1976D2;
    padding: 7px 14px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 600;
}


/* =========================================================
   STRUK
========================================================= */

.receipt-wrapper {
    width: 100%;
    display: flex;
    justify-content: center;
    margin-top: 35px;
}

.receipt {
    width: 80mm;
    max-width: 80mm;

    background: #ffffff;

    padding: 6mm;

    box-sizing: border-box;

    border: 1px dashed #aaa;
    border-radius: 8px;

    font-family: Arial, Helvetica, sans-serif;

    color: #222;
}


/* =========================================================
   HEADER STRUK
========================================================= */

.receipt-header {
    text-align: center;

    padding-bottom: 4mm;
    margin-bottom: 4mm;

    border-bottom: 1px dashed #999;
}

.receipt-header h2 {
    margin: 0;

    font-size: 22px;

    font-weight: 800;

    /* HITAM */
    color: #000000;

    letter-spacing: 0.5px;
}

.receipt-header .subtitle {
    margin-top: 2px;

    font-size: 11px;

    color: #555;
}

.receipt-header .thanks {
    margin-top: 2px;

    font-size: 10px;

    color: #777;
}


/* =========================================================
   INFORMASI TRANSAKSI
========================================================= */

.receipt-info {
    width: 100%;

    font-size: 10px;

    margin-bottom: 4mm;
}

.receipt-info-row {
    display: flex;

    justify-content: space-between;

    gap: 8px;

    margin-bottom: 2mm;

    line-height: 1.3;
}

.receipt-info-row .label {
    color: #555;

    white-space: nowrap;
}

.receipt-info-row .value {
    color: #222;

    font-weight: 600;

    text-align: right;

    word-break: break-word;
}


/* =========================================================
   PRODUK
========================================================= */

.receipt-items {

    border-top: 1px dashed #999;

    border-bottom: 1px dashed #999;

    padding: 3mm 0;
}

.receipt-item {

    margin-bottom: 3mm;

    font-size: 10px;
}

.receipt-item:last-child {
    margin-bottom: 0;
}

.receipt-item-name {

    font-size: 11px;

    font-weight: 700;

    /* HITAM */
    color: #000000;

    margin-bottom: 1mm;

    word-break: break-word;
}

.receipt-item-detail {

    display: flex;

    justify-content: space-between;

    align-items: center;

    gap: 5px;

    font-size: 9px;

    line-height: 1.4;
}

.receipt-item-detail .left {

    color: #666;

    flex: 1;
}

.receipt-item-detail .right {

    color: #222;

    font-weight: 700;

    white-space: nowrap;

    text-align: right;
}


/* =========================================================
   TOTAL
========================================================= */

.receipt-total {

    padding: 4mm 0;

    border-bottom: 1px dashed #999;
}

.receipt-total-row {

    display: flex;

    justify-content: space-between;

    align-items: center;

    gap: 10px;
}

.receipt-total-label {

    font-size: 17px;

    font-weight: 800;

    /* HITAM */
    color: #000000;
}

.receipt-total-value {

    font-size: 17px;

    font-weight: 800;

    /* HITAM */
    color: #000000;

    white-space: nowrap;
}


/* =========================================================
   FOOTER
========================================================= */

.receipt-footer {

    text-align: center;

    padding-top: 4mm;

    font-size: 9px;

    line-height: 1.5;

    color: #777;
}

.receipt-footer strong {

    display: block;

    margin-top: 2mm;

    /* HITAM */
    color: #000000;

    font-size: 11px;

    font-weight: 800;
}


/* =========================================================
   BUTTON
========================================================= */

.receipt-actions {

    text-align: center;

    margin-top: 15px;
}

.btn-print {

    background: #1976D2;

    color: white;

    border: none;

    padding: 10px 25px;

    border-radius: 10px;

    cursor: pointer;

    font-weight: 600;
}

.btn-print:hover {

    background: #155E75;
}

.btn-back {

    background: #6c757d;

    color: white;

    border-radius: 10px;

    padding: 10px 20px;

    text-decoration: none;
}

.btn-back:hover {

    background: #495057;

    color: white;
}


/* =========================================================
   PRINT
========================================================= */

@media print {

    @page {

        size: 80mm 150mm;

        margin: 0;
    }

    html {

        width: 80mm !important;

        margin: 0 !important;

        padding: 0 !important;
    }

    body {

        width: 80mm !important;

        min-width: 80mm !important;

        max-width: 80mm !important;

        margin: 0 !important;

        padding: 0 !important;

        background: white !important;

        overflow: visible !important;
    }


    /* SEMBUNYIKAN SEMUA */

    body * {

        visibility: hidden !important;
    }


    /* TAMPILKAN STRUK SAJA */

    .receipt,
    .receipt * {

        visibility: visible !important;
    }


    /* POSISI STRUK */

    .receipt-wrapper {

        position: absolute !important;

        left: 0 !important;

        top: 0 !important;

        width: 80mm !important;

        max-width: 80mm !important;

        margin: 0 !important;

        padding: 0 !important;

        display: block !important;
    }


    /* STRUK FULL WIDTH */

    .receipt {

        position: relative !important;

        width: 80mm !important;

        max-width: 80mm !important;

        min-width: 80mm !important;

        height: auto !important;

        min-height: 0 !important;

        margin: 0 !important;

        padding: 5mm !important;

        box-sizing: border-box !important;

        border: none !important;

        border-radius: 0 !important;

        box-shadow: none !important;

        background: white !important;

        overflow: visible !important;

        /* SEMUA TEKS STRUK HITAM */
        color: #000000 !important;
    }


    /* =====================================================
       HEADER PRINT
    ====================================================== */

    .receipt-header {

        padding-bottom: 3mm !important;

        margin-bottom: 3mm !important;

        border-bottom: 1px dashed #888 !important;
    }

    .receipt-header h2 {

        font-size: 20px !important;

        margin: 0 !important;

        line-height: 1.2 !important;

        /* HITAM TEBAL */
        color: #000000 !important;

        font-weight: 800 !important;
    }

    .receipt-header .subtitle {

        font-size: 10px !important;

        margin-top: 1mm !important;

        color: #555 !important;
    }

    .receipt-header .thanks {

        font-size: 9px !important;

        margin-top: 1mm !important;

        color: #777 !important;
    }


    /* =====================================================
       INFO PRINT
    ====================================================== */

    .receipt-info {

        font-size: 9px !important;

        margin-bottom: 3mm !important;
    }

    .receipt-info-row {

        margin-bottom: 1.5mm !important;

        line-height: 1.2 !important;
    }

    .receipt-info-row .label {

        color: #555 !important;
    }

    .receipt-info-row .value {

        max-width: 48mm !important;

        word-break: break-word !important;

        color: #000000 !important;

        font-weight: 600 !important;
    }


    /* =====================================================
       PRODUK PRINT
    ====================================================== */

    .receipt-items {

        padding: 3mm 0 !important;

        border-top: 1px dashed #888 !important;

        border-bottom: 1px dashed #888 !important;
    }

    .receipt-item {

        margin-bottom: 2.5mm !important;

        font-size: 9px !important;

        page-break-inside: avoid !important;

        break-inside: avoid !important;
    }

    .receipt-item-name {

        font-size: 10px !important;

        margin-bottom: 1mm !important;

        line-height: 1.2 !important;

        /* HITAM TEBAL */
        color: #000000 !important;

        font-weight: 700 !important;
    }

    .receipt-item-detail {

        font-size: 9px !important;

        line-height: 1.2 !important;
    }

    .receipt-item-detail .left {

        color: #555 !important;
    }

    .receipt-item-detail .right {

        color: #000000 !important;

        font-weight: 700 !important;
    }


    /* =====================================================
       TOTAL PRINT
    ====================================================== */

    .receipt-total {

        padding: 3mm 0 !important;
    }

    .receipt-total-label {

        font-size: 15px !important;

        /* HITAM TEBAL */
        color: #000000 !important;

        font-weight: 800 !important;
    }

    .receipt-total-value {

        font-size: 15px !important;

        /* HITAM TEBAL */
        color: #000000 !important;

        font-weight: 800 !important;
    }


    /* =====================================================
       FOOTER PRINT
    ====================================================== */

    .receipt-footer {

        padding-top: 3mm !important;

        font-size: 8px !important;

        line-height: 1.3 !important;

        color: #777 !important;
    }

    .receipt-footer strong {

        font-size: 10px !important;

        margin-top: 1.5mm !important;

        /* HITAM TEBAL */
        color: #000000 !important;

        font-weight: 800 !important;
    }


    /* =====================================================
       HILANGKAN BUTTON
    ====================================================== */

    .receipt-actions {

        display: none !important;
    }

    .detail-container {

        width: 80mm !important;

        max-width: 80mm !important;

        margin: 0 !important;

        padding: 0 !important;
    }

    .detail-card {

        width: 80mm !important;

        margin: 0 !important;

        padding: 0 !important;

        border: none !important;

        box-shadow: none !important;
    }


    /* =====================================================
       HILANGKAN BAGIAN DETAIL LAIN SAAT PRINT
    ====================================================== */

    .page-title,
    .page-subtitle,
    .info-box,
    .table-container,
    .btn-back {

        display: none !important;
    }
}

</style>


<!-- =========================================================
     HALAMAN
========================================================= -->

<div class="container detail-container">

    <h2 class="page-title">
        Detail Penjualan
    </h2>

    <p class="page-subtitle">
        Informasi lengkap transaksi penjualan
    </p>


    <div class="detail-card">

        @php

            // Hanya mengambil item yang produknya masih ada
            $validItems = $penjualan->itemPenjualan
                ? $penjualan->itemPenjualan->filter(
                    fn($item) => $item->produk
                )->values()
                : collect();

        @endphp


        <!-- =====================================================
             INFORMASI TRANSAKSI
        ====================================================== -->

        <div class="row g-3">

            <!-- TANGGAL -->

            <div class="col-md-4">

                <div class="info-box">

                    <div class="info-label">
                        Tanggal Transaksi
                    </div>

                    <div class="info-value">

                        @if($penjualan->tanggal_transaksi)

                            {{
                                \Carbon\Carbon::parse(
                                    $penjualan->tanggal_transaksi
                                )->format('d-m-Y H:i')
                            }}

                        @elseif($penjualan->created_at)

                            {{
                                $penjualan->created_at
                                    ->format('d-m-Y H:i')
                            }}

                        @else

                            -

                        @endif

                    </div>

                </div>

            </div>


            <!-- KASIR -->

            <div class="col-md-4">

                <div class="info-box">

                    <div class="info-label">
                        Kasir
                    </div>

                    <div class="info-value">

                        {{ $penjualan->user->name ?? '-' }}

                    </div>

                </div>

            </div>


            <!-- PEMBAYARAN -->

            <div class="col-md-4">

                <div class="info-box">

                    <div class="info-label">
                        Metode Pembayaran
                    </div>

                    <div class="info-value">

                        <span class="payment-badge">

                            {{
                                strtoupper(
                                    $penjualan->metode_pembayaran ?? '-'
                                )
                            }}

                        </span>

                    </div>

                </div>

            </div>


            <!-- STATUS -->

            <div class="col-md-6">

                <div class="info-box">

                    <div class="info-label">
                        Status
                    </div>

                    <div class="info-value">

                        @php

                            $status = strtoupper(
                                $penjualan->status ?? ''
                            );

                        @endphp


                        @if(
                            $status === 'SELESAI' ||
                            $status === 'COMPLETED'
                        )

                            <span class="badge-status status-selesai">
                                {{ $penjualan->status }}
                            </span>

                        @elseif($status === 'PENDING')

                            <span class="badge-status status-pending">
                                {{ $penjualan->status }}
                            </span>

                        @elseif(
                            $status === 'BATAL' ||
                            $status === 'CANCELLED'
                        )

                            <span class="badge-status status-batal">
                                {{ $penjualan->status }}
                            </span>

                        @else

                            <span class="badge-status status-default">
                                {{ $penjualan->status ?? '-' }}
                            </span>

                        @endif

                    </div>

                </div>

            </div>


            <!-- TOTAL -->

            <div class="col-md-6">

                <div class="info-box">

                    <div class="info-label">
                        Total Pembayaran
                    </div>

                    <div
                        class="info-value"
                        style="font-size:22px;color:#1976D2;"
                    >

                        Rp
                        {{
                            number_format(
                                $penjualan->total_pembayaran ?? 0,
                                0,
                                ',',
                                '.'
                            )
                        }}

                    </div>

                </div>

            </div>

        </div>


        <!-- =====================================================
             DAFTAR PRODUK
        ====================================================== -->

        <div class="table-container">

            <h5
                class="fw-bold mb-3"
                style="color:#155E75;"
            >
                Produk yang Dibeli
            </h5>


            @if($validItems->count() > 0)

                <div class="table-responsive">

                    <table class="table table-bordered">

                        <thead>

                            <tr>

                                <th>No</th>

                                <th>Produk</th>

                                <th class="text-end">
                                    Harga
                                </th>

                                <th class="text-center">
                                    Qty
                                </th>

                                <th class="text-end">
                                    Subtotal
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @foreach($validItems as $index => $item)

                                <tr>

                                    <td>
                                        {{ $index + 1 }}
                                    </td>

                                    <td>

                                        <span class="product-name">

                                            {{ $item->produk->nama }}

                                        </span>

                                    </td>

                                    <td class="text-end">

                                        Rp
                                        {{
                                            number_format(
                                                $item->harga_satuan ?? 0,
                                                0,
                                                ',',
                                                '.'
                                            )
                                        }}

                                    </td>

                                    <td class="text-center">

                                        {{ $item->qty ?? 0 }}

                                    </td>

                                    <td class="text-end">

                                        Rp
                                        {{
                                            number_format(
                                                $item->subtotal ?? 0,
                                                0,
                                                ',',
                                                '.'
                                            )
                                        }}

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                </div>

            @else

                <div class="alert alert-info">

                    Tidak ada produk dalam transaksi ini.

                </div>

            @endif

        </div>


        <!-- =====================================================
             STRUK
        ====================================================== -->

        <div class="receipt-wrapper">

            <div class="receipt">


                <!-- HEADER -->

                <div class="receipt-header">

                    <h2>
                        TOKO MARIKA
                    </h2>

                    <div class="subtitle">
                        Struk Pembelian
                    </div>

                    <div class="thanks">
                        Terima kasih telah berbelanja
                    </div>

                </div>


                <!-- INFORMASI -->

                <div class="receipt-info">

                    <!-- TANGGAL -->

                    <div class="receipt-info-row">

                        <span class="label">
                            Tanggal
                        </span>

                        <span class="value">

                            @if($penjualan->tanggal_transaksi)

                                {{
                                    \Carbon\Carbon::parse(
                                        $penjualan->tanggal_transaksi
                                    )->format('d/m/Y H:i')
                                }}

                            @elseif($penjualan->created_at)

                                {{
                                    $penjualan->created_at
                                        ->format('d/m/Y H:i')
                                }}

                            @else

                                -

                            @endif

                        </span>

                    </div>


                    <!-- KASIR -->

                    <div class="receipt-info-row">

                        <span class="label">
                            Kasir
                        </span>

                        <span class="value">

                            {{ $penjualan->user->name ?? '-' }}

                        </span>

                    </div>


                    <!-- PEMBAYARAN -->

                    <div class="receipt-info-row">

                        <span class="label">
                            Pembayaran
                        </span>

                        <span class="value">

                            {{
                                strtoupper(
                                    $penjualan->metode_pembayaran ?? '-'
                                )
                            }}

                        </span>

                    </div>


                    <!-- STATUS -->

                    <div class="receipt-info-row">

                        <span class="label">
                            Status
                        </span>

                        <span class="value">

                            {{
                                strtoupper(
                                    $penjualan->status ?? '-'
                                )
                            }}

                        </span>

                    </div>

                </div>


                <!-- =================================================
                     ITEM PRODUK
                ================================================== -->

                <div class="receipt-items">

                    @if($validItems->count() > 0)

                        @foreach($validItems as $item)

                            <div class="receipt-item">

                                <!-- NAMA PRODUK -->

                                <div class="receipt-item-name">

                                    {{ $item->produk->nama }}

                                </div>


                                <!-- HARGA + JUMLAH + SUBTOTAL -->

                                <div class="receipt-item-detail">

                                    <div class="left">

                                        {{ $item->qty ?? 0 }}

                                        x

                                        Rp
                                        {{
                                            number_format(
                                                $item->harga_satuan ?? 0,
                                                0,
                                                ',',
                                                '.'
                                            )
                                        }}

                                    </div>


                                    <div class="right">

                                        Rp
                                        {{
                                            number_format(
                                                $item->subtotal ?? 0,
                                                0,
                                                ',',
                                                '.'
                                            )
                                        }}

                                    </div>

                                </div>

                            </div>

                        @endforeach

                    @else

                        <div
                            style="
                                text-align:center;
                                font-size:9px;
                                color:#777;
                            "
                        >
                            Tidak ada produk
                        </div>

                    @endif

                </div>


                <!-- =================================================
                     TOTAL
                ================================================== -->

                <div class="receipt-total">

                    <div class="receipt-total-row">

                        <div class="receipt-total-label">
                            TOTAL
                        </div>

                        <div class="receipt-total-value">

                            Rp
                            {{
                                number_format(
                                    $penjualan->total_pembayaran ?? 0,
                                    0,
                                    ',',
                                    '.'
                                )
                            }}

                        </div>

                    </div>

                </div>


                <!-- =================================================
                     FOOTER
                ================================================== -->

                <div class="receipt-footer">

                    <div>
                        Terima kasih atas kunjungan Anda
                    </div>

                    <div>
                        Semoga Anda puas dengan pelayanan kami
                    </div>

                    <strong>
                        TOKO MARIKA
                    </strong>

                </div>


                <!-- =================================================
                     BUTTON CETAK
                ================================================== -->

                <div class="receipt-actions">

                    <button
                        type="button"
                        onclick="window.print()"
                        class="btn-print"
                    >

                        🖨 Cetak Struk

                    </button>

                </div>


            </div>

        </div>


        <!-- =====================================================
             KEMBALI
        ====================================================== -->

        <div class="text-center mt-4">

            <a
                href="{{ route('penjualan.index') }}"
                class="btn-back"
            >

                ← Kembali ke Penjualan

            </a>

        </div>


    </div>

</div>

@endsection