@extends('layouts.app')

@section('content')

<style>
    body {
        background-color: #eaf6ff;
    }

    /* Card */
    .user-card {
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(66, 153, 225, 0.15);
    }

    /* Header */
    .card-header-custom {
        background: #bde3f8;
        color: #1e5f85;
    }

    /* Label */
    .form-label-custom {
        color: #2878a8;
        font-weight: 700;
    }

    /* Input */
    .form-control,
    .form-select {
        border: 2px solid #b9ddf2;
        border-radius: 12px;
        padding: 10px;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #69b7e8;
        box-shadow: 0 0 8px rgba(105, 183, 232, 0.35);
    }

    /* Tombol kembali */
    .btn-kembali {
        background: #cce9f8;
        color: #21698f;
        border: none;
        border-radius: 10px;
        padding: 10px 18px;
        font-weight: 600;
    }

    .btn-kembali:hover {
        background: #a9d8f0;
        color: #164f6d;
    }

    /* Tombol simpan */
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
</style>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-7">

            <div class="card user-card border-0">

                <!-- Header -->
                <div class="card-header card-header-custom text-center py-4">

                    <h2 class="fw-bold mb-1">
                        Tambah User
                    </h2>

                    <small>
                        Lengkapi data pengguna baru
                    </small>

                </div>

                <div class="card-body p-4">

                    <form action="{{ route('users.store') }}" method="POST">

                        @csrf

                        {{-- NAMA --}}
                        <div class="mb-3">

                            <label class="form-label-custom">
                                Nama
                            </label>

                            <input
                                type="text"
                                name="name"
                                value="{{ old('name') }}"
                                class="form-control @error('name') is-invalid @enderror"
                              >

                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        {{-- EMAIL --}}
                        <div class="mb-3">

                            <label class="form-label-custom">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror"
                               >
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        {{-- PASSWORD --}}
                        <div class="mb-3">

                            <label class="form-label-custom">
                                Password
                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control @error('password') is-invalid @enderror"
                               >
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        {{-- ROLE --}}
                        <div class="mb-4">

                            <label class="form-label-custom">
                                Role
                            </label>

                            <select
                                name="role_id"
                                class="form-select @error('role_id') is-invalid @enderror">

                                <option value="">
                                    -- Pilih Role --
                                </option>

                                @foreach($roles as $role)

                                    <option value="{{ $role->id }}"
                                        {{ old('role_id') == $role->id ? 'selected' : '' }}>

                                        {{ ucfirst($role->name) }}

                                    </option>

                                @endforeach

                            </select>

                            @error('role_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror

                        </div>

                        {{-- BUTTON --}}
                        <div class="d-flex justify-content-between">

                            <a href="{{ route('users.index') }}"
                               class="btn btn-kembali">

                                ← Kembali

                            </a>

                            <button
                                type="submit"
                                class="btn btn-simpan">

                                Simpan

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection