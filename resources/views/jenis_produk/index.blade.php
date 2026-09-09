<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Jenis Produk</title>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(
                135deg,
                #f1fbff,
                #e5f7fd,
                #f8fdff
            );
            min-height: 100vh;
            color: #164d63;
        }

        /* =========================
           NAVBAR
        ========================= */

        .navbar {
            width: 100%;
            min-height: 78px;

            background: linear-gradient(
                90deg,
                #70cce9,
                #49afd6
            );

            display: flex;
            align-items: center;

            padding: 0 22px;

            border-radius: 0 0 18px 18px;

            box-shadow:
                0 5px 15px rgba(58, 160, 200, .20);

            color: white;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;

            font-size: 21px;
            font-weight: bold;

            margin-right: 25px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;

            background: white;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            color: #239ac7;

            font-size: 19px;
        }

        .menu {
            display: flex;
            align-items: center;

            gap: 4px;

            background: rgba(255, 255, 255, .10);

            border-radius: 14px;

            padding: 5px;
        }

        .menu a {
            text-decoration: none;

            color: white;

            padding: 13px 15px;

            border-radius: 11px;

            font-size: 13px;
            font-weight: 600;

            display: flex;
            align-items: center;

            gap: 7px;

            transition: .2s;
        }

        .menu a:hover {
            background: rgba(255, 255, 255, .18);
        }

        .menu a.active {
            background: white;

            color: #1676a3;

            box-shadow:
                0 4px 10px rgba(0, 0, 0, .08);
        }

        .navbar-right {
            margin-left: auto;

            display: flex;
            align-items: center;

            gap: 14px;
        }

        .login-info {
            background: rgba(255, 255, 255, .18);

            padding: 9px 15px;

            border-radius: 12px;

            display: flex;
            align-items: center;

            gap: 9px;

            font-size: 11px;
        }

        .login-info i {
            width: 30px;
            height: 30px;

            background: white;

            color: #1680ad;

            border-radius: 50%;

            display: flex;
            align-items: center;
            justify-content: center;

            font-size: 14px;
        }

        .login-info strong {
            display: block;

            font-size: 11px;
        }

        .logout {
            border: none;

            background: white;

            color: #1473a0;

            padding: 12px 18px;

            border-radius: 10px;

            font-weight: bold;

            cursor: pointer;

            display: flex;
            align-items: center;

            gap: 7px;
        }

        /* =========================
           CONTAINER
        ========================= */

        .container {
            width: 1000px;

            max-width: calc(100% - 40px);

            margin: 20px auto 50px;
        }

        .page-title {
            margin-bottom: 25px;
        }

        .page-title h1 {
            font-size: 29px;

            color: #145a73;

            font-weight: 800;

            margin-bottom: 7px;
        }

        .page-title p {
            color: #6a99aa;

            font-size: 14px;
        }

        /* =========================
           BUTTON TAMBAH
        ========================= */

        .btn-tambah {
            display: inline-flex;

            align-items: center;

            gap: 9px;

            padding: 13px 19px;

            border: none;

            border-radius: 12px;

            background: linear-gradient(
                135deg,
                #65c5e8,
                #369dca
            );

            color: white;

            font-size: 13px;

            font-weight: bold;

            cursor: pointer;

            box-shadow:
                0 7px 16px rgba(51, 162, 204, .20);

            margin-bottom: 20px;

            transition: .2s;
        }

        .btn-tambah:hover {
            transform: translateY(-2px);

            box-shadow:
                0 9px 18px rgba(51, 162, 204, .28);
        }

        /* =========================
           CARD
        ========================= */

        .card {
            background: white;

            border-radius: 19px;

            overflow: hidden;

            border: 1px solid #d2edf7;

            box-shadow:
                0 12px 30px rgba(50, 153, 190, .10);
        }

        .card-header {
            height: 73px;

            padding: 0 25px;

            background: linear-gradient(
                90deg,
                #72c9e8,
                #49afd5
            );

            color: white;

            display: flex;

            align-items: center;

            justify-content: space-between;
        }

        .card-title {
            font-size: 16px;

            font-weight: bold;

            display: flex;

            align-items: center;

            gap: 10px;
        }

        .total {
            padding: 8px 14px;

            border-radius: 20px;

            background: rgba(255, 255, 255, .17);

            border: 1px solid rgba(255, 255, 255, .28);

            font-size: 11px;

            font-weight: bold;
        }

        .card-body {
            padding: 24px;
        }

        /* =========================
           ALERT
        ========================= */

        .alert {
            padding: 13px 16px;

            border-radius: 10px;

            margin-bottom: 18px;

            font-size: 13px;

            font-weight: 600;
        }

        .alert-success {
            background: #e5f9ef;

            color: #198754;

            border: 1px solid #bcebd0;
        }

        .alert-error {
            background: #fff0f2;

            color: #dc5368;

            border: 1px solid #ffd0d7;
        }

        /* =========================
           SEARCH
        ========================= */

        .search-box {
            display: flex;

            gap: 8px;

            margin-bottom: 21px;
        }

        .search-input {
            flex: 1;

            height: 42px;

            border: 1px solid #b9e5f5;

            border-radius: 10px;

            padding: 0 14px;

            outline: none;

            color: #23657b;

            font-size: 13px;
        }

        .search-input:focus {
            border-color: #4db4dc;

            box-shadow:
                0 0 0 3px rgba(77, 180, 220, .10);
        }

        .btn-search {
            height: 42px;

            padding: 0 17px;

            border: 1px solid #8bd2eb;

            background: white;

            color: #167da7;

            border-radius: 10px;

            cursor: pointer;

            font-weight: bold;

            display: flex;

            align-items: center;

            gap: 7px;
        }

        .btn-search:hover {
            background: #eefaff;
        }

        /* =========================
           TABLE
        ========================= */

        .table-wrapper {
            overflow-x: auto;

            border: 1px solid #d8edf5;

            border-radius: 13px;
        }

        table {
            width: 100%;

            border-collapse: collapse;

            min-width: 800px;
        }

        thead {
            background: #e9f8fd;
        }

        th {
            text-align: left;

            padding: 14px;

            font-size: 11px;

            color: #177496;

            font-weight: 800;

            text-transform: uppercase;
        }

        td {
            padding: 13px 14px;

            border-top: 1px solid #e7f3f7;

            font-size: 12px;

            font-weight: 600;

            color: #315f70;
        }

        tbody tr:hover {
            background: #f7fcfe;
        }

        /* =========================
           NOMOR
        ========================= */

        .number {
            width: 55px;
        }

        .number span {
            width: 31px;

            height: 31px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            background: #ecf9fd;

            border: 1px solid #bce5f3;

            color: #1680a9;

            font-size: 12px;
        }

        /* =========================
           USER
        ========================= */

        .user-name {
            display: flex;

            align-items: center;

            gap: 8px;

            white-space: nowrap;
        }

        .user-icon {
            width: 30px;

            height: 30px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #e9f7fc;

            border-radius: 8px;

            color: #38a5cf;

            flex-shrink: 0;
        }

        .user-name strong {
            color: #315f70;

            font-size: 12px;
        }

        /* =========================
           NAMA JENIS
        ========================= */

        .name {
            display: flex;

            align-items: center;

            gap: 10px;
        }

        .name-icon {
            width: 28px;

            height: 28px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: #e9f7fc;

            border-radius: 8px;

            color: #38a5cf;
        }

        /* =========================
           JUMLAH
        ========================= */

        .jumlah {
            display: inline-flex;

            align-items: center;

            gap: 7px;

            border: 1px solid #a9def0;

            background: #effaff;

            color: #1680a9;

            border-radius: 20px;

            padding: 7px 11px;

            font-size: 11px;
        }

        /* =========================
           AKSI
        ========================= */

        .actions {
            display: flex;

            gap: 5px;
        }

        .btn-edit,
        .btn-hapus {
            border: none;

            padding: 8px 11px;

            border-radius: 8px;

            font-size: 11px;

            font-weight: bold;

            cursor: pointer;

            text-decoration: none;

            display: inline-flex;

            align-items: center;

            gap: 5px;
        }

        .btn-edit {
            background: #effaff;

            color: #1480a8;

            border: 1px solid #b7e4f3;
        }

        .btn-hapus {
            background: #ed7186;

            color: white;
        }

        .btn-edit:hover {
            background: #dff6fc;
        }

        .btn-hapus:hover {
            background: #df5b71;
        }

        /* =========================
           MODAL
        ========================= */

        .modal-overlay {
            position: fixed;

            inset: 0;

            background: rgba(20, 75, 94, .30);

            display: none;

            align-items: center;

            justify-content: center;

            z-index: 9999;

            padding: 20px;
        }

        .modal-overlay.active {
            display: flex;
        }

        .modal-box {
            width: 440px;

            max-width: 100%;

            background: white;

            border-radius: 18px;

            overflow: hidden;

            box-shadow:
                0 20px 60px rgba(0, 0, 0, .18);

            animation: modalShow .2s ease;
        }

        @keyframes modalShow {

            from {
                opacity: 0;

                transform: translateY(-15px) scale(.98);
            }

            to {
                opacity: 1;

                transform: translateY(0) scale(1);
            }
        }

        .modal-header {
            background: linear-gradient(
                90deg,
                #72c9e8,
                #49afd5
            );

            color: white;

            padding: 20px 23px;

            display: flex;

            align-items: center;

            justify-content: space-between;
        }

        .modal-header h3 {
            font-size: 16px;

            display: flex;

            align-items: center;

            gap: 9px;
        }

        .btn-close {
            border: none;

            background: transparent;

            color: white;

            font-size: 25px;

            cursor: pointer;

            width: 32px;

            height: 32px;

            border-radius: 50%;
        }

        .btn-close:hover {
            background: rgba(255, 255, 255, .15);
        }

        .modal-body {
            padding: 25px;
        }

        .form-group {
            margin-bottom: 5px;
        }

        .form-group label {
            display: block;

            color: #315f70;

            font-size: 13px;

            font-weight: bold;

            margin-bottom: 9px;
        }

        .form-group input {
            width: 100%;

            height: 44px;

            border: 1px solid #b9e3f1;

            border-radius: 10px;

            outline: none;

            padding: 0 14px;

            color: #315f70;

            font-size: 13px;
        }

        .form-group input:focus {
            border-color: #49afd5;

            box-shadow:
                0 0 0 3px rgba(73, 175, 213, .10);
        }

        .error {
            display: block;

            margin-top: 7px;

            color: #dc5368;

            font-size: 11px;
        }

        .modal-footer {
            padding: 0 25px 24px;

            display: flex;

            justify-content: flex-end;

            gap: 8px;
        }

        .btn-batal,
        .btn-simpan {
            border: none;

            padding: 11px 17px;

            border-radius: 9px;

            cursor: pointer;

            font-size: 12px;

            font-weight: bold;
        }

        .btn-batal {
            background: #eef1f2;

            color: #64777e;
        }

        .btn-simpan {
            background: linear-gradient(
                135deg,
                #65c5e8,
                #369dca
            );

            color: white;
        }

        /* =========================
           EMPTY
        ========================= */

        .empty {
            text-align: center;

            padding: 40px;

            color: #8aabb7;

            font-size: 13px;
        }

        .empty i {
            display: block;

            font-size: 35px;

            margin-bottom: 10px;

            color: #a8ddec;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 900px) {

            .navbar {
                height: auto;

                padding: 12px;

                flex-wrap: wrap;

                gap: 10px;
            }

            .logo {
                margin-right: 0;
            }

            .menu {
                order: 3;

                width: 100%;

                overflow-x: auto;
            }

            .navbar-right {
                margin-left: auto;
            }

            .container {
                width: 100%;
            }
        }

        @media (max-width: 600px) {

            .navbar-right {
                width: 100%;

                justify-content: space-between;
            }

            .login-info {
                flex: 1;
            }

            .page-title h1 {
                font-size: 25px;
            }

            .card-body {
                padding: 15px;
            }

            .card-header {
                padding: 0 15px;
            }
        }
    </style>

</head>

<body>

    <!-- =========================
         NAVBAR
    ========================= -->

    <nav class="navbar">

        <div class="logo">

            <div class="logo-icon">
                <i class="fas fa-store"></i>
            </div>

            POS

        </div>


        <div class="menu">

            <!-- Dashboard -->
            <a href="{{ route('dashboard') }}">
                <i class="fas fa-home"></i>
                Dashboard
            </a>

            <!-- User -->
            <a href="{{ route('users.index') }}">
                <i class="fas fa-users"></i>
                User
            </a>

            <!-- Jenis Produk -->
            <a href="{{ route('jenis-produk.index') }}"
                class="active">

                <i class="fas fa-tag"></i>

                Jenis Produk

            </a>

            <!-- Produk -->
            <a href="{{ route('produk.index') }}">
                <i class="fas fa-box"></i>
                Produk
            </a>

            <!-- Penjualan -->
            <a href="{{ route('penjualan.index') }}">
                <i class="fas fa-cart-shopping"></i>
                Penjualan
            </a>

            <!-- Tentang -->
            <a href="{{ route('tentang') }}">
                <i class="fas fa-circle-info"></i>
                Tentang
            </a>

        </div>


        <div class="navbar-right">

            <div class="login-info">

                <i class="fas fa-user"></i>

                <div>

                    <span>Login sebagai</span>

                    <strong>
                        {{ auth()->user()->name ?? 'User' }}
                    </strong>

                </div>

            </div>


            <form action="{{ route('logout') }}"
                method="POST">

                @csrf

                <button type="submit"
                    class="logout">

                    <i class="fas fa-right-from-bracket"></i>

                    Logout

                </button>

            </form>

        </div>

    </nav>


    <!-- =========================
         CONTAINER
    ========================= -->

    <div class="container">

        <div class="page-title">

            <h1>
                Jenis Produk
            </h1>

            <p>
                Kelola kategori dan jenis produk toko
            </p>

        </div>


        <!-- BUTTON TAMBAH -->

        <button type="button"
            class="btn-tambah"
            onclick="openModal()">

            <i class="fas fa-plus"></i>

            Tambah Jenis Produk

        </button>


        <!-- CARD -->

        <div class="card">

            <div class="card-header">

                <div class="card-title">

                    <i class="fas fa-tags"></i>

                    Daftar Jenis Produk

                </div>


                <div class="total">

                    <i class="fas fa-layer-group"></i>

                    Total {{ $jenisProduk->count() }} Jenis

                </div>

            </div>


            <div class="card-body">

                <!-- SUCCESS -->

                @if(session('success'))

                    <div class="alert alert-success">

                        <i class="fas fa-circle-check"></i>

                        {{ session('success') }}

                    </div>

                @endif


                <!-- ERROR -->

                @if(session('error'))

                    <div class="alert alert-error">

                        <i class="fas fa-circle-exclamation"></i>

                        {{ session('error') }}

                    </div>

                @endif


                <!-- SEARCH -->

                <form action="{{ route('jenis-produk.index') }}"
                    method="GET"
                    class="search-box">

                    <input
                        type="text"
                        name="search"
                        class="search-input"
                        placeholder="Cari nama jenis produk..."
                        value="{{ request('search') }}">

                    <button type="submit"
                        class="btn-search">

                        <i class="fas fa-search"></i>

                        Cari

                    </button>

                </form>


                <!-- TABLE -->

                <div class="table-wrapper">

                    <table>

                        <thead>

                            <tr>

                                <th class="number">
                                    No
                                </th>

                                <th>
                                    User
                                </th>

                                <th>
                                    Nama Jenis Produk
                                </th>

                                <th>
                                    Jumlah Produk
                                </th>

                                <th>
                                    Aksi
                                </th>

                            </tr>

                        </thead>


                        <tbody>

                            @forelse($jenisProduk as $index => $jenis)

                                <tr>

                                    <!-- NO -->

                                    <td class="number">

                                        <span>
                                            {{ $index + 1 }}
                                        </span>

                                    </td>


                                    <!-- USER -->

                                    <td>

                                        <div class="user-name">

                                            <div class="user-icon">

                                                <i class="fas fa-user"></i>

                                            </div>

                                            <strong>

                                                {{ $jenis->user->name ?? 'Marika Rahayu' }}

                                            </strong>

                                        </div>

                                    </td>


                                    <!-- NAMA JENIS PRODUK -->

                                    <td>

                                        <div class="name">

                                            <div class="name-icon">

                                                <i class="fas fa-tag"></i>

                                            </div>

                                            {{ $jenis->nama }}

                                        </div>

                                    </td>


                                    <!-- JUMLAH PRODUK -->

                                    <td>

                                        <span class="jumlah">

                                            <i class="fas fa-box"></i>

                                            {{ $jenis->produk_count }}

                                            Produk

                                        </span>

                                    </td>


                                    <!-- AKSI -->

                                    <td>

                                        <div class="actions">

                                            <!-- EDIT -->

                                            <a href="{{ route('jenis-produk.edit', $jenis->id) }}"
                                                class="btn-edit">

                                                <i class="fas fa-pen"></i>

                                                Edit

                                            </a>


                                            <!-- HAPUS -->

                                            <form
                                                action="{{ route('jenis-produk.destroy', $jenis->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Apakah kamu yakin ingin menghapus jenis produk ini?')"
                                                style="display:inline;">

                                                @csrf

                                                @method('DELETE')

                                                <button type="submit"
                                                    class="btn-hapus">

                                                    <i class="fas fa-trash"></i>

                                                    Hapus

                                                </button>

                                            </form>

                                        </div>

                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="5"
                                        class="empty">

                                        <i class="fas fa-tags"></i>

                                        Belum ada jenis produk.

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>


    <!-- =========================
         MODAL TAMBAH
    ========================= -->

    <div id="modalTambah"
        class="modal-overlay">

        <div class="modal-box">

            <div class="modal-header">

                <h3>

                    <i class="fas fa-tag"></i>

                    Tambah Jenis Produk

                </h3>


                <button type="button"
                    class="btn-close"
                    onclick="closeModal()">

                    &times;

                </button>

            </div>


            <form action="{{ route('jenis-produk.store') }}"
                method="POST">

                @csrf

                <div class="modal-body">

                    <div class="form-group">

                        <label for="nama">

                            Nama Jenis Produk

                        </label>

                        <input
                            type="text"
                            id="nama"
                            name="nama"
                            placeholder="Masukkan nama jenis produk..."
                            value="{{ old('nama') }}"
                            autocomplete="off"
                            required>


                        @error('nama')

                            <small class="error">

                                {{ $message }}

                            </small>

                        @enderror

                    </div>

                </div>


                <div class="modal-footer">

                    <button type="button"
                        class="btn-batal"
                        onclick="closeModal()">

                        Batal

                    </button>


                    <button type="submit"
                        class="btn-simpan">

                        <i class="fas fa-save"></i>

                        Simpan

                    </button>

                </div>

            </form>

        </div>

    </div>


    <!-- =========================
         JAVASCRIPT
    ========================= -->

    <script>

        function openModal() {

            const modal =
                document.getElementById('modalTambah');

            modal.classList.add('active');

            setTimeout(function () {

                document
                    .getElementById('nama')
                    .focus();

            }, 100);

        }


        function closeModal() {

            document
                .getElementById('modalTambah')
                .classList.remove('active');

        }


        document
            .getElementById('modalTambah')
            .addEventListener('click', function (event) {

                if (event.target === this) {

                    closeModal();

                }

            });


        document.addEventListener(
            'keydown',
            function (event) {

                if (event.key === 'Escape') {

                    closeModal();

                }

            }
        );

    </script>

</body>

</html>