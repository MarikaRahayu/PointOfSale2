@extends('layouts.app')

@section('title', 'Edit Produk')

@section('content')

<style>

body {
    background: #eef8ff;
}

/* Card utama */
.edit-card {
    background: white;
    border-radius: 20px;
    padding: 35px;
    box-shadow: 0 8px 25px rgba(33, 150, 243, 0.15);
}

/* Judul */
.edit-title {
    color: #2196f3;
    font-weight: bold;
    margin-bottom: 25px;
}

/* Label */
.form-label {
    color: #1565c0;
    font-weight: 600;
}

/* Input */
.form-control {
    border: 2px solid #bbdefb;
    border-radius: 12px;
    padding: 10px;
}

.form-control:focus {
    border-color: #42a5f5;
    box-shadow: 0 0 8px rgba(33, 150, 243, 0.35);
}

/* Foto */
.img-thumbnail {
    border: 4px solid #90caf9;
    border-radius: 15px;
}

/* Tombol simpan */
.btn-simpan {
    background: #42a5f5;
    color: white;
    border: none;
    border-radius: 10px;
    padding: 10px 25px;
    font-weight: 600;
}

.btn-simpan:hover {
    background: #1976d2;
    color: white;
}

/* Tombol kembali */
.btn-kembali {
    background: #e3f2fd;
    color: #1565c0;
    border: none;
    border-radius: 10px;
    padding: 10px 25px;
    font-weight: 600;
}

.btn-kembali:hover {
    background: #90caf9;
    color: white;
}

/* Animasi */
.edit-card {
    animation: muncul .5s ease;
}

@keyframes muncul {

    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }

}

</style>


<div class="container mt-5">

    <div class="edit-card">

        <h3 class="edit-title">
            Edit Produk
        </h3>


        <form action="{{ route('produk.update', $product->id) }}"
              method="POST"
              enctype="multipart/form-data">

            @csrf
            @method('PUT')


            {{-- FOTO --}}
            <div class="mb-4">

                <label class="form-label">
                    Foto Produk
                </label>


                @if($product->foto)

                    <div class="mb-3">

                        <img
                            src="{{ asset('storage/'.$product->foto) }}"
                            width="150"
                            height="150"
                            style="object-fit: cover"
                            class="img-thumbnail">

                    </div>

                @endif


                <input
                    type="file"
                    name="foto"
                    class="form-control @error('foto') is-invalid @enderror">


                @error('foto')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            {{-- JENIS PRODUK --}}
            <div class="mb-3">

                <label class="form-label">
                    Jenis Produk
                </label>


                <select
                    name="jenis_produk_id"
                    class="form-control @error('jenis_produk_id') is-invalid @enderror">

                    <option value="">
                        -- Pilih Jenis Produk --
                    </option>

                    @foreach($jenisProduk as $jenis)

                        <option
                            value="{{ $jenis->id }}"
                            @selected(old('jenis_produk_id', $product->jenis_produk_id) == $jenis->id)>

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


            {{-- NAMA --}}
            <div class="mb-3">

                <label class="form-label">
                    Nama Produk
                </label>


                <input
                    type="text"
                    name="nama"
                    value="{{ old('nama', $product->nama) }}"
                    class="form-control @error('nama') is-invalid @enderror"
                    placeholder="Masukkan nama produk">


                @error('nama')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            {{-- HARGA BELI --}}
            <div class="mb-3">

                <label class="form-label">
                    Harga Beli
                </label>


                <input
                    type="number"
                    name="harga_beli"
                    value="{{ old('harga_beli', $product->harga_beli) }}"
                    class="form-control @error('harga_beli') is-invalid @enderror"
                    placeholder="Masukkan harga beli">


                @error('harga_beli')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            {{-- HARGA JUAL --}}
            <div class="mb-3">

                <label class="form-label">
                    Harga Jual
                </label>


                <input
                    type="number"
                    name="harga_jual"
                    value="{{ old('harga_jual', $product->harga_jual) }}"
                    class="form-control @error('harga_jual') is-invalid @enderror"
                    placeholder="Masukkan harga jual">


                @error('harga_jual')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            {{-- STOK --}}
            <div class="mb-4">

                <label class="form-label">
                    Stok
                </label>


                <input
                    type="number"
                    name="stok"
                    value="{{ old('stok', $product->stok) }}"
                    class="form-control @error('stok') is-invalid @enderror"
                    placeholder="Masukkan jumlah stok">


                @error('stok')

                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>

                @enderror

            </div>


            {{-- BUTTON --}}
            <div class="d-flex gap-2">

                <button
                    type="submit"
                    class="btn btn-simpan">

                    Simpan Perubahan

                </button>


                <a
                    href="{{ route('produk.index') }}"
                    class="btn btn-kembali">

                    ← Kembali

                </a>

            </div>


        </form>

    </div>

</div>

@endsection