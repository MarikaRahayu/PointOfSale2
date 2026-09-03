@extends('layouts.app')

@section('content')

<style>
    body {
        background: #eaf6ff;
    }

    .produk-card {
        background: white;
        padding: 30px;
        border-radius: 20px;
        box-shadow: 0 8px 25px rgba(66, 153, 225, 0.15);
    }

    .produk-title {
        color: #2878a8;
        font-weight: 700;
        margin-bottom: 25px;
    }

    .form-label {
        color: #21698f;
        font-weight: 600;
    }

    .form-control,
    .form-select {
        border: 2px solid #b9ddf2;
        border-radius: 12px;
        padding: 10px 13px;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #69b7e8;
        box-shadow: 0 0 8px rgba(105, 183, 232, 0.35);
    }

    .form-control::placeholder {
        color: #9bbfd3;
    }

    /* Preview Foto */
    .preview-box {
        margin-top: 15px;
        padding: 10px;
        background: #eaf6ff;
        border: 2px dashed #a9d8f0;
        border-radius: 15px;
    }

    #preview {
        border: 3px solid #9fd3ee;
        border-radius: 15px;
        width: 220px;
        height: 220px;
        object-fit: cover;
    }

    /* Tombol Simpan */
    .btn-simpan {
        background: #5dade2;
        color: white;
        border: none;
        border-radius: 10px;
        padding: 10px 20px;
        font-weight: 600;
    }

    .btn-simpan:hover {
        background: #3498db;
        color: white;
    }

    /* Tombol Kembali */
    .btn-kembali {
        background: #cce9f8;
        color: #21698f;
        border: none;
        border-radius: 10px;
        padding: 10px 20px;
        font-weight: 600;
    }

    .btn-kembali:hover {
        background: #a9d8f0;
        color: #164f6d;
    }

    .invalid-feedback {
        font-weight: 500;
    }
</style>


<div class="container mt-5 mb-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="produk-card">

                <h3 class="produk-title">
                    Tambah Produk
                </h3>


                <form
                    action="{{ route('produk.store') }}"
                    method="POST"
                    enctype="multipart/form-data"
                >

                    @csrf


                    {{-- =========================
                         FOTO PRODUK
                    ========================== --}}

                    <div class="mb-3">

                        <label for="foto" class="form-label">
                            Foto Produk
                        </label>

                        <input
                            type="file"
                            name="foto"
                            id="foto"
                            accept="image/*"
                            onchange="previewFoto(event)"
                            class="form-control @error('foto') is-invalid @enderror"
                        >

                        @error('foto')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror


                        {{-- Preview Foto --}}
                        <div class="preview-box text-center">

                            <img
                                id="preview"
                                src=""
                                alt="Preview Foto"
                                style="display: none;"
                            >

                            <div
                                id="preview-text"
                                class="text-muted"
                            >
                                Preview foto akan muncul di sini
                            </div>

                        </div>

                    </div>


                    {{-- =========================
                         JENIS PRODUK
                    ========================== --}}

                    <div class="mb-3">

                        <label
                            for="jenis_produk_id"
                            class="form-label"
                        >
                            Jenis Produk
                        </label>

                        <select
                            name="jenis_produk_id"
                            id="jenis_produk_id"
                            class="form-select @error('jenis_produk_id') is-invalid @enderror"
                            required
                        >

                            <option value="">
                                -- Pilih Jenis Produk --
                            </option>

                            @foreach ($jenisProduk as $jenis)

                                <option
                                    value="{{ $jenis->id }}"
                                    {{ old('jenis_produk_id') == $jenis->id ? 'selected' : '' }}
                                >
                                    {{ $jenis->nama }}
                                </option>

                            @endforeach

                        </select>

                        @error('jenis_produk_id')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    {{-- =========================
                         NAMA PRODUK
                    ========================== --}}

                    <div class="mb-3">

                        <label
                            for="nama"
                            class="form-label"
                        >
                            Nama Produk
                        </label>

                        <input
                            type="text"
                            name="nama"
                            id="nama"
                            value="{{ old('nama') }}"
                            class="form-control @error('nama') is-invalid @enderror"
                            required
                        >

                        @error('nama')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    {{-- =========================
                         HARGA BELI
                    ========================== --}}

                    <div class="mb-3">

                        <label
                            for="harga_beli"
                            class="form-label"
                        >
                            Harga Beli
                        </label>

                        <input
                            type="number"
                            name="harga_beli"
                            id="harga_beli"
                            value="{{ old('harga_beli') }}"
                            class="form-control @error('harga_beli') is-invalid @enderror"
                            min="0"
                            required
                        >

                        @error('harga_beli')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    {{-- =========================
                         HARGA JUAL
                    ========================== --}}

                    <div class="mb-3">

                        <label
                            for="harga_jual"
                            class="form-label"
                        >
                            Harga Jual
                        </label>

                        <input
                            type="number"
                            name="harga_jual"
                            id="harga_jual"
                            value="{{ old('harga_jual') }}"
                            class="form-control @error('harga_jual') is-invalid @enderror"
                            min="0"
                            required
                        >

                        @error('harga_jual')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    {{-- =========================
                         STOK
                    ========================== --}}

                    <div class="mb-4">

                        <label
                            for="stok"
                            class="form-label"
                        >
                            Stok
                        </label>

                        <input
                            type="number"
                            name="stok"
                            id="stok"
                            value="{{ old('stok') }}"
                            class="form-control @error('stok') is-invalid @enderror"
                            min="0"
                            required
                        >

                        @error('stok')

                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>

                        @enderror

                    </div>


                    {{-- =========================
                         BUTTON
                    ========================== --}}

                    <div class="d-flex gap-2">

                        <button
                            type="submit"
                            class="btn btn-simpan"
                        >
                            Simpan
                        </button>

                        <a
                            href="{{ route('produk.index') }}"
                            class="btn btn-kembali"
                        >
                            Kembali
                        </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


{{-- =========================
     PREVIEW FOTO
========================== --}}

<script>

    function previewFoto(event) {

        const input = event.target;
        const preview = document.getElementById('preview');
        const previewText = document.getElementById('preview-text');

        if (input.files && input.files[0]) {

            const reader = new FileReader();

            reader.onload = function(e) {

                preview.src = e.target.result;

                preview.style.display = 'inline-block';

                previewText.style.display = 'none';

            };

            reader.readAsDataURL(input.files[0]);

        } else {

            preview.src = '';

            preview.style.display = 'none';

            previewText.style.display = 'block';

        }

    }

</script>

@endsection