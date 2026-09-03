@extends('layouts.app')

@section('title', 'Edit User')

@section('content')

<style>

/* =========================
   BABY BLUE - EDIT USER
========================= */

:root {
    --baby-blue: #89CFF0;
    --blue-main: #5BBCE4;
    --blue-dark: #247BA0;
    --blue-deep: #155E75;
    --blue-soft: #EAF8FD;
    --blue-border: #B9E5F7;
}


/* =========================
   BODY
========================= */

body {

    background:
        linear-gradient(
            135deg,
            #F5FCFF 0%,
            #EAF8FD 50%,
            #F8FDFF 100%
        ) !important;

    min-height: 100vh;

}


/* =========================
   CARD
========================= */

.user-card {

    background: white;

    padding: 35px;

    border-radius: 20px;

    border: 1px solid #D9F1FA;

    box-shadow:
        0 10px 30px rgba(36, 123, 160, .12);

    animation: muncul .5s ease;

}


/* =========================
   JUDUL
========================= */

.user-title {

    color: var(--blue-dark);

    font-weight: 800;

    margin-bottom: 25px;

    position: relative;

    padding-left: 14px;

}


/* garis kecil di samping judul */

.user-title::before {

    content: "";

    position: absolute;

    left: 0;

    top: 3px;

    width: 5px;

    height: 28px;

    border-radius: 5px;

    background:
        linear-gradient(
            180deg,
            #89CFF0,
            #247BA0
        );

}


/* =========================
   LABEL FORM
========================= */

.form-label {

    color: var(--blue-deep);

    font-weight: 600;

}


/* =========================
   INPUT & SELECT
========================= */

.form-control,
.form-select {

    border: 2px solid var(--blue-border);

    border-radius: 12px;

    padding: 10px;

    color: #315F70;

    background: #FFFFFF;

    transition: all .25s ease;

}


.form-control::placeholder {

    color: #8CB8C9;

}


.form-control:focus,
.form-select:focus {

    border-color: var(--blue-main);

    box-shadow:
        0 0 0 4px rgba(91, 188, 228, .13);

    outline: none;

}


/* =========================
   BUTTON DI FORM
   ========================= */

/* Jika _form menggunakan tombol submit Bootstrap */

.btn-primary {

    background:
        linear-gradient(
            135deg,
            #89CFF0,
            #5BBCE4
        ) !important;

    border: none !important;

    color: white !important;

    border-radius: 10px;

    font-weight: 600;

    padding: 10px 20px;

    box-shadow:
        0 5px 12px rgba(91, 188, 228, .20);

    transition: all .25s ease;

}


.btn-primary:hover {

    background:
        linear-gradient(
            135deg,
            #5BBCE4,
            #247BA0
        ) !important;

    color: white !important;

    transform: translateY(-2px);

}


/* =========================
   BUTTON SECONDARY
========================= */

.btn-secondary {

    background: #EAF8FD !important;

    border: 1px solid #B9E5F7 !important;

    color: var(--blue-dark) !important;

    border-radius: 10px;

    font-weight: 600;

}


.btn-secondary:hover {

    background: #DDF4FC !important;

    color: var(--blue-deep) !important;

}


/* =========================
   VALIDATION ERROR
========================= */

.text-danger {

    color: #D65F72 !important;

}


/* =========================
   ANIMASI
========================= */

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


/* =========================
   RESPONSIVE
========================= */

@media(max-width: 768px) {

    .user-card {

        padding: 25px 20px;

        border-radius: 16px;

    }


    .user-title {

        font-size: 24px;

    }

}

</style>

<div class="container mt-5">
    <div class="user-card">

        <h3 class="user-title">
            Edit User
        </h3>

        <form action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            @include('users._form')
        </form>

    </div>
</div>

@endsection
