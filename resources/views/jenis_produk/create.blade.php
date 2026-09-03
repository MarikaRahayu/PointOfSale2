@extends('layouts.app')

@section('title', 'Tambah Jenis Produk')

@section('content')

<style>

    body {
        background: #eef8ff;
    }

    .form-container {
        max-width: 700px;
        margin: 50px auto;
        padding: 0 20px;
    }

    .form-card {
        background: white;
        padding: 35px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(33, 150, 243, .12);
    }

    .form-title {
        color: #2196f3;
        font-weight: 700;
        margin-bottom: 30px;
    }

    .form-label {
        font-weight: 600;
        color: #1565c0;
    }

    .form-control {
        border: 2px solid #bbdefb;
        border-radius: 10px;
        padding: 12px;
    }

    .form-control:focus {
        border-color: #42a5f5;
        box-shadow: 0 0 0 3px rgba(33, 150, 243, .12);
    }

    .btn-simpan {
        background: #42a5f5;
        color: white;
        border: none;
        border-radius: 10px;
        padding: 11px 22px;
        font-weight: 600;
        transition: .2s;
    }

    .btn-simpan:hover {
        background: #1976d2;
        color: white;
        transform: translateY(-1px);
    }

    .btn-kembali {
        background: #e3f2fd;
        color: #1565c0;
        border: none;
        border-radius: 10px;
        padding: 11px 22px;
        text-decoration: none;
        font-weight: 600;
        margin-left: 5px;
        transition: .2s;
    }

    .btn-kembali:hover {
        background: #90caf9;
        color: white;
    }

</style>


<div class="form-container">

    <div class="form-card">

        <h2 class="form-title">
            <i class="bi bi-tag-fill"></i>
            Tambah Jenis Produk
        </h2>


        <form action="{{ route('jenis-produk.store') }}"
              method="POST">

            @csrf


            <div class="mb-4">

                <label class="form-label">
                    Nama Jenis Produk
                </label>


                <input
                    type="text"
                    name="nama"
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


            <button
                type="submit"
                class="btn-simpan">

                <i class="bi bi-save-fill"></i>
                Simpan

            </button>


            <a
                href="{{ route('jenis-produk.index') }}"
                class="btn-kembali">

                <i class="bi bi-arrow-left"></i>
                Kembali

            </a>

        </form>

    </div>

</div>

@endsection