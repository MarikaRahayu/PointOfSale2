@extends('layouts.app')

@section('title', 'Tambah Jenis Produk')

@section('content')

    <style>
        /* =========================================================
       BODY
       ========================================================= */

        body {
            min-height: 100vh;

            background:
                radial-gradient(circle at 10% 10%,
                    rgba(137, 207, 240, .20),
                    transparent 28%),
                radial-gradient(circle at 90% 20%,
                    rgba(91, 188, 228, .12),
                    transparent 25%),
                linear-gradient(135deg,
                    #f8fdff 0%,
                    #edfaff 45%,
                    #f7fcff 100%) !important;
        }


        /* =========================================================
       FORM CONTAINER
       ========================================================= */

        .form-container {
            max-width: 700px;

            margin: 50px auto;

            padding: 0 20px 60px;
        }


        /* =========================================================
       FORM CARD
       ========================================================= */

        .form-card {
            position: relative;

            overflow: hidden;

            background: rgba(255, 255, 255, .97);

            padding: 35px;

            border:
                1px solid rgba(181, 228, 245, .75);

            border-radius: 20px;

            box-shadow:
                0 18px 50px rgba(36, 123, 160, .10);

            animation: formFade .5s ease;
        }


        /* =========================================================
       DECORATION
       ========================================================= */

        .form-card::before {
            content: "";

            position: absolute;

            top: 0;
            left: 0;

            width: 100%;
            height: 5px;

            background:
                linear-gradient(90deg,
                    #89cff0,
                    #5bbce4,
                    #369fca);
        }


        /* =========================================================
       FORM TITLE
       ========================================================= */

        .form-title {
            display: flex;

            align-items: center;

            gap: 10px;

            color: #155e75;

            font-size: 26px;

            font-weight: 800;

            margin-bottom: 30px;
        }

        .form-title i {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            width: 42px;
            height: 42px;

            color: #369fca;

            border-radius: 12px;

            background: #e8f7fd;

            font-size: 19px;
        }


        /* =========================================================
       LABEL
       ========================================================= */

        .form-label {
            display: block;

            color: #247ba0;

            font-size: 14px;

            font-weight: 700;

            margin-bottom: 9px;
        }


        /* =========================================================
       INPUT
       ========================================================= */

        .form-control {
            width: 100%;

            padding: 12px 15px;

            color: #254b59;

            border:
                1.5px solid #b5e4f5;

            border-radius: 12px;

            background: #fbfeff;

            outline: none;

            transition:
                border-color .25s ease,
                box-shadow .25s ease,
                background .25s ease;
        }

        .form-control::placeholder {
            color: #9ab7c1;
        }

        .form-control:focus {
            background: white;

            border-color: #5bbce4;

            box-shadow:
                0 0 0 4px rgba(91, 188, 228, .12);
        }


        /* =========================================================
       VALIDATION
       ========================================================= */

        .form-control.is-invalid {
            border-color: #e96f83;

            box-shadow:
                0 0 0 3px rgba(233, 111, 131, .10);
        }

        .invalid-feedback {
            display: block;

            margin-top: 7px;

            color: #d95368;

            font-size: 13px;

            font-weight: 600;
        }


        /* =========================================================
       BUTTON AREA
       ========================================================= */

        .form-actions {
            display: flex;

            align-items: center;

            gap: 10px;

            margin-top: 25px;
        }


        /* =========================================================
       BUTTON SIMPAN
       ========================================================= */

        .btn-simpan {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            gap: 7px;

            padding: 11px 22px;

            color: white;

            border: none;

            border-radius: 10px;

            background:
                linear-gradient(135deg,
                    #89cff0,
                    #369fca);

            font-size: 14px;

            font-weight: 700;

            box-shadow:
                0 7px 17px rgba(91, 188, 228, .20);

            transition:
                transform .2s ease,
                box-shadow .2s ease,
                background .2s ease;
        }

        .btn-simpan:hover {
            color: white;

            transform: translateY(-2px);

            background:
                linear-gradient(135deg,
                    #5bbce4,
                    #247ba0);

            box-shadow:
                0 10px 22px rgba(36, 123, 160, .22);
        }


        /* =========================================================
       BUTTON KEMBALI
       ========================================================= */

        .btn-kembali {
            display: inline-flex;

            align-items: center;
            justify-content: center;

            gap: 7px;

            padding: 11px 22px;

            color: #247ba0;

            border:
                1px solid #b5e4f5;

            border-radius: 10px;

            background: #e8f7fd;

            text-decoration: none;

            font-size: 14px;

            font-weight: 700;

            transition:
                transform .2s ease,
                background .2s ease,
                color .2s ease;
        }

        .btn-kembali:hover {
            color: white;

            background: #5bbce4;

            border-color: #5bbce4;

            transform: translateY(-2px);
        }


        /* =========================================================
       ANIMATION
       ========================================================= */

        @keyframes formFade {

            from {
                opacity: 0;

                transform: translateY(15px);
            }

            to {
                opacity: 1;

                transform: translateY(0);
            }

        }


        /* =========================================================
       RESPONSIVE
       ========================================================= */

        @media(max-width: 576px) {

            .form-container {
                margin: 30px auto;

                padding:
                    0 15px 40px;
            }

            .form-card {
                padding: 25px 20px;
            }

            .form-title {
                font-size: 22px;
            }

            .form-title i {
                width: 38px;
                height: 38px;

                font-size: 17px;
            }

            .form-actions {
                flex-direction: column;

                align-items: stretch;
            }

            .btn-simpan,
            .btn-kembali {
                width: 100%;
            }

        }
    </style>


    <div class="form-container">

        <div class="form-card">

            {{-- =================================================
            TITLE
            ================================================== --}}

            <h2 class="form-title">

                <i class="bi bi-tag-fill"></i>

                Tambah Jenis Produk

            </h2>


            {{-- =================================================
            FORM
            ================================================== --}}

            <form action="{{ route('jenis-produk.store') }}" method="POST">

                @csrf


                {{-- =================================================
                NAMA JENIS PRODUK
                ================================================== --}}

                <div class="mb-4">

                    <label for="nama" class="form-label">
                        Nama Jenis Produk
                    </label>


                    <input type="text" id="nama" name="nama" value="{{ old('nama') }}"
                        class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan nama jenis produk..."
                        autocomplete="off" required>


                    @error('nama')

                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror

                </div>


                {{-- =================================================
                BUTTON
                ================================================== --}}

                <div class="form-actions">

                    <button type="submit" class="btn-simpan">

                        <i class="bi bi-save-fill"></i>

                        Simpan

                    </button>


                    <a href="{{ route('jenis-produk.index') }}" class="btn-kembali">

                        <i class="bi bi-arrow-left"></i>

                        Kembali

                    </a>

                </div>


            </form>

        </div>

    </div>

@endsection