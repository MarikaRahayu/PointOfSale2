@extends('layouts.app')

@section('title', 'Edit Jenis Produk')

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
        box-shadow: 0 10px 30px rgba(52, 152, 219, .15);
    }

    .form-title {
        color: #3498db;
        font-weight: 700;
        margin-bottom: 30px;
    }

    .form-label {
        font-weight: 600;
        color: #2471a3;
    }

    .form-control {
        border: 2px solid #b9e2ff;
        border-radius: 10px;
        padding: 12px;
    }

    .form-control:focus {
        border-color: #5dade2;
        box-shadow: 0 0 0 3px rgba(93, 173, 226, .15);
    }

    .btn-update {
        background: #3498db;
        color: white;
        border: none;
        border-radius: 10px;
        padding: 11px 22px;
        font-weight: 600;
    }

    .btn-update:hover {
        background: #2471a3;
        color: white;
    }

    .btn-kembali {
        background: #aed6f1;
        color: #2471a3;
        border: none;
        border-radius: 10px;
        padding: 11px 22px;
        text-decoration: none;
        font-weight: 600;
    }

    .btn-kembali:hover {
        background: #85c1e9;
        color: white;
    }

</style>


<div class="form-container">

    <div class="form-card">

        <h2 class="form-title">

            <i class="bi bi-pencil-fill"></i>

            Edit Jenis Produk

        </h2>


        <form
            action="{{ route('jenis-produk.update', $jenisProduk->id) }}"
            method="POST">

            @csrf
            @method('PUT')


            <div class="mb-4">

                <label class="form-label">
                    Nama Jenis Produk
                </label>


                <input
                    type="text"
                    name="nama"
                    value="{{ old('nama', $jenisProduk->nama) }}"
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
                class="btn-update">

                <i class="bi bi-save-fill"></i>
                Update

            </button>


            <a
                href="{{ route('jenis-produk.index') }}"
                class="btn-kembali">

                Kembali

            </a>

        </form>

    </div>

</div>

@endsection