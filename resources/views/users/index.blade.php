@extends('layouts.app')

@section('title','Users')

@section('content')

<style>

/* =========================
   BABY BLUE - USER PAGE
========================= */

:root {
    --baby-blue: #89CFF0;
    --blue-main: #5BBCE4;
    --blue-dark: #247BA0;
    --blue-deep: #155E75;
    --blue-soft: #EAF8FD;
    --blue-light: #F5FCFF;
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

}


/* =========================
   PAGE TITLE
========================= */

.page-title {

    color: var(--blue-dark);

    font-weight: 800;

    font-size: 35px;

    letter-spacing: -.5px;

}


.page-subtitle {

    color: #6E929F;

}


/* =========================
   CARD
========================= */

.user-card {

    border: 1px solid #D9F1FA;

    border-radius: 20px;

    overflow: hidden;

    background: white;

    box-shadow:
        0 12px 35px rgba(36,123,160,.12);

}


/* =========================
   CARD HEADER
========================= */

.card-header-custom {

    background:
        linear-gradient(
            135deg,
            #89CFF0,
            #5BBCE4
        );

    color: white;

    padding: 22px;

}


.card-header-custom h5 {

    font-weight: 700;

}


.card-header-custom small {

    opacity: .95;

}


/* =========================
   SEARCH
========================= */

.search-box {

    border-radius: 12px;

    border: 2px solid var(--blue-border);

    height: 48px;

    color: var(--blue-deep);

    background: white;

    transition: all .25s ease;

}


.search-box::placeholder {

    color: #8CB8C9;

}


.search-box:focus {

    border-color: var(--blue-main);

    box-shadow:
        0 0 0 4px rgba(91,188,228,.13);

    outline: none;

}


/* =========================
   BUTTON TAMBAH
========================= */

.btn-pink {

    background:
        linear-gradient(
            135deg,
            #89CFF0,
            #5BBCE4
        );

    color: white;

    border: none;

    border-radius: 10px;

    padding: 10px 18px;

    font-weight: 600;

    box-shadow:
        0 5px 12px rgba(91,188,228,.20);

    transition: all .25s ease;

}


.btn-pink:hover {

    background:
        linear-gradient(
            135deg,
            #5BBCE4,
            #247BA0
        );

    color: white;

    transform: translateY(-2px);

    box-shadow:
        0 7px 16px rgba(36,123,160,.22);

}


/* =========================
   BUTTON EDIT
========================= */

.btn-edit {

    background: #DDF4FC;

    color: var(--blue-dark);

    border: 1px solid #B9E5F7;

    border-radius: 8px;

    transition: all .2s ease;

}


.btn-edit:hover {

    background: #89CFF0;

    color: white;

    border-color: #89CFF0;

    transform: translateY(-1px);

}


/* =========================
   BUTTON DELETE
========================= */

.btn-delete {

    background: #E88B9A;

    color: white;

    border: none;

    border-radius: 8px;

    transition: all .2s ease;

}


.btn-delete:hover {

    background: #D65F72;

    color: white;

    transform: translateY(-1px);

}


/* =========================
   TABLE
========================= */

.table {

    margin-bottom: 0;

}


.table thead {

    background:
        linear-gradient(
            90deg,
            #EAF8FD,
            #DDF4FC
        );

    color: var(--blue-dark);

}


.table thead th {

    border: none;

    text-align: center;

    padding: 15px;

    font-weight: 700;

}


.table tbody tr {

    transition: all .2s ease;

}


.table tbody tr:hover {

    background: #F2FBFE;

    transform: scale(1.002);

}


.table td {

    vertical-align: middle;

    color: #496B78;

}


.table td strong {

    color: #315F70;

}


/* =========================
   BADGE ADMIN
========================= */

.badge-admin {

    background:
        linear-gradient(
            135deg,
            #5BBCE4,
            #247BA0
        );

    padding: 8px 14px;

    border-radius: 20px;

    color: white;

    font-size: 13px;

    font-weight: 600;

    display: inline-block;

    box-shadow:
        0 3px 8px rgba(36,123,160,.15);

}


/* =========================
   BADGE KASIR
========================= */

.badge-kasir {

    background: #DDF4FC;

    border: 1px solid #B9E5F7;

    padding: 8px 14px;

    border-radius: 20px;

    color: var(--blue-dark);

    font-size: 13px;

    font-weight: 600;

    display: inline-block;

}


/* =========================
   PAGINATION
========================= */

.pagination .page-link {

    color: var(--blue-dark);

    border-color: var(--blue-border);

    border-radius: 8px;

    margin: 0 2px;

    transition: all .2s ease;

}


.pagination .page-link:hover {

    background: var(--blue-main);

    color: white;

    border-color: var(--blue-main);

}


.pagination .active .page-link {

    background:
        linear-gradient(
            135deg,
            #89CFF0,
            #5BBCE4
        );

    border-color: var(--blue-main);

    color: white;

}


/* =========================
   EMPTY DATA
========================= */

.table tbody tr td h5 {

    color: #7A9BA7 !important;

}


/* =========================
   RESPONSIVE
========================= */

@media(max-width:768px) {

    .page-title {

        font-size: 28px;

    }

    .page-subtitle {

        font-size: 14px;

    }

    .user-card {

        border-radius: 16px;

    }

    .card-header-custom {

        padding: 18px;

    }

    .btn-pink {

        padding: 9px 14px;

        font-size: 14px;

    }

}

</style>

<div class="container py-4">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h2 class="page-title">
                Manajemen User
            </h2>

            <p class="page-subtitle mb-0">
                Kelola seluruh pengguna aplikasi Point Of Sales
            </p>

        </div>

        <a href="{{ route('users.create') }}" class="btn btn-pink">

            + Tambah User

        </a>

    </div>

    <div class="card user-card">

        <div class="card-header-custom">

            <h5 class="mb-1">
                Daftar Pengguna
            </h5>

            <small>
                Total User : <strong>{{ $users->total() }}</strong>
            </small>

        </div>

        <div class="card-body">

            <form method="GET">

                <div class="row mb-4">

                    <div class="col-md-5">

                        <input
                            type="text"
                            name="search"
                            value="{{ request('search') }}"
                            class="form-control search-box"
                            placeholder="🔍 Cari nama atau email">

                    </div>

                </div>

            </form>

            <div class="table-responsive">

                <table class="table align-middle table-hover">

                    <thead>

                        <tr>

                            <th width="70">No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th width="120">Role</th>
                            <th width="170">Aksi</th>

                        </tr>

                    </thead>

                    <tbody>

                    @forelse($users as $user)

                    <tr>

                        <td class="text-center">
                            {{ $loop->iteration }}
                        </td>

                        <td>

                            <strong>{{ $user->name }}</strong>

                        </td>

                        <td>

                            {{ $user->email }}

                        </td>

                        <td class="text-center">

                            @if($user->role->name=='admin')

                                <span class="badge-admin">

                                    Admin

                                </span>

                            @else

                                <span class="badge-kasir">

                                    Kasir

                                </span>

                            @endif

                        </td>

                        <td class="text-center">

                            <a href="{{ route('users.edit',$user->id) }}"
                               class="btn btn-sm btn-edit">

                                 Edit

                            </a>

                            <form
                                action="{{ route('users.destroy',$user->id) }}"
                                method="POST"
                                style="display:inline;">

                                @csrf
                                @method('DELETE')

                                <button
                                    onclick="return confirm('Yakin ingin menghapus user ini?')"
                                    class="btn btn-sm btn-delete">

                                    Hapus

                                </button>

                            </form>

                        </td>

                    </tr>

                    @empty

                    <tr>

                        <td colspan="5" class="text-center py-5">

                            <h5 style="color:#999">

                                Belum ada data user

                            </h5>

                        </td>

                    </tr>

                    @endforelse

                    </tbody>

                </table>

            </div>

            <div class="d-flex justify-content-end mt-4">

                {{ $users->links() }}

            </div>

        </div>

    </div>

</div>

@endsection