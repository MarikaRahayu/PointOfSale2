

<?php $__env->startSection('title', 'Jenis Produk'); ?>

<?php $__env->startSection('content'); ?>

<style>

/* =========================================================
   MODERN BABY BLUE - JENIS PRODUK
   ========================================================= */

:root {
    --blue-50: #f4fbff;
    --blue-100: #e8f7fd;
    --blue-200: #d4f0fa;
    --blue-300: #b5e4f5;
    --blue-400: #89cff0;
    --blue-500: #5bbce4;
    --blue-600: #369fca;
    --blue-700: #247ba0;
    --blue-800: #155e75;

    --text-dark: #254b59;
    --text-muted: #7895a0;

    --danger: #e96f83;
    --danger-dark: #d95368;

    --white: #ffffff;
}


/* =========================================================
   BODY
   ========================================================= */

body {
    min-height: 100vh;

    background:
        radial-gradient(
            circle at 10% 10%,
            rgba(137, 207, 240, .20),
            transparent 28%
        ),
        radial-gradient(
            circle at 90% 20%,
            rgba(91, 188, 228, .12),
            transparent 25%
        ),
        linear-gradient(
            135deg,
            #f8fdff 0%,
            #edfaff 45%,
            #f7fcff 100%
        ) !important;
}


/* =========================================================
   MAIN CONTAINER
   ========================================================= */

.jenis-container {
    max-width: 1180px;
    margin: 0 auto;
    padding: 45px 22px 60px;
}


/* =========================================================
   HEADER
   ========================================================= */

.jenis-header {
    position: relative;
    margin-bottom: 25px;
    padding: 5px 0;
}

.jenis-header::before {
    content: "";
    position: absolute;
    left: 0;
    top: -10px;

    width: 55px;
    height: 5px;

    border-radius: 20px;

    background:
        linear-gradient(
            90deg,
            var(--blue-400),
            var(--blue-600)
        );
}

.jenis-title {
    margin: 0 0 7px;

    color: var(--blue-800);

    font-size: 34px;
    font-weight: 800;

    letter-spacing: -1px;
}

.jenis-subtitle {
    margin: 0;

    color: var(--text-muted);

    font-size: 15px;
}


/* =========================================================
   BUTTON TAMBAH
   ========================================================= */

.btn-tambah-wrapper {
    display: flex;
    justify-content: flex-start;

    margin-bottom: 22px;
}

.btn-tambah {
    position: relative;

    display: inline-flex;
    align-items: center;
    gap: 9px;

    padding: 12px 20px;

    color: white;
    text-decoration: none;

    border: none;
    border-radius: 13px;

    font-size: 14px;
    font-weight: 700;

    background:
        linear-gradient(
            135deg,
            var(--blue-400),
            var(--blue-600)
        );

    box-shadow:
        0 8px 20px rgba(91, 188, 228, .25);

    transition:
        transform .25s ease,
        box-shadow .25s ease,
        background .25s ease;
}

.btn-tambah i {
    font-size: 17px;
}

.btn-tambah:hover {
    color: white;

    transform: translateY(-3px);

    background:
        linear-gradient(
            135deg,
            var(--blue-500),
            var(--blue-700)
        );

    box-shadow:
        0 12px 25px rgba(36, 123, 160, .25);
}


/* =========================================================
   MAIN CARD
   ========================================================= */

.jenis-card {
    position: relative;

    overflow: hidden;

    background: rgba(255, 255, 255, .95);

    border:
        1px solid rgba(181, 228, 245, .75);

    border-radius: 22px;

    box-shadow:
        0 18px 50px rgba(36, 123, 160, .10);

    animation: jenisFade .5s ease;
}


/* =========================================================
   CARD HEADER
   ========================================================= */

.jenis-card-header {
    position: relative;

    display: flex;
    align-items: center;
    justify-content: space-between;

    gap: 15px;

    padding: 25px 28px;

    color: white;

    background:
        linear-gradient(
            120deg,
            #89cff0 0%,
            #5bbce4 55%,
            #43abd4 100%
        );

    overflow: hidden;
}

.jenis-card-header::after {
    content: "";

    position: absolute;

    width: 180px;
    height: 180px;

    right: -60px;
    top: -100px;

    border-radius: 50%;

    background: rgba(255,255,255,.12);
}

.jenis-card-header h4 {
    position: relative;
    z-index: 2;

    display: flex;
    align-items: center;
    gap: 10px;

    margin: 0;

    font-size: 18px;
    font-weight: 700;
}

.jenis-card-header h4 i {
    font-size: 20px;
}

.jenis-card-header p {
    position: relative;
    z-index: 2;

    margin: 0;

    padding: 7px 14px;

    color: white;

    font-size: 13px;
    font-weight: 600;

    border:
        1px solid rgba(255,255,255,.25);

    border-radius: 30px;

    background: rgba(255,255,255,.18);

    backdrop-filter: blur(8px);
}


/* =========================================================
   CARD BODY
   ========================================================= */

.jenis-card-body {
    padding: 28px;
}


/* =========================================================
   SEARCH AREA
   ========================================================= */

.search-box {
    display: flex;
    align-items: center;

    gap: 10px;

    margin-bottom: 25px;
}

.search-input-wrapper {
    position: relative;

    max-width: 450px;

    flex: 1;
}

.search-input-wrapper i {
    position: absolute;

    left: 15px;
    top: 50%;

    color: var(--blue-500);

    font-size: 16px;

    transform: translateY(-50%);

    pointer-events: none;
}

.search-box input {
    width: 100%;

    padding: 12px 16px 12px 42px;

    color: var(--text-dark);

    border:
        1.5px solid var(--blue-300);

    border-radius: 13px;

    background: #fbfeff;

    outline: none;

    transition:
        border-color .25s ease,
        box-shadow .25s ease,
        background .25s ease;
}

.search-box input::placeholder {
    color: #9ab7c1;
}

.search-box input:focus {
    background: white;

    border-color: var(--blue-500);

    box-shadow:
        0 0 0 4px rgba(91,188,228,.12);
}


/* =========================================================
   BUTTON CARI
   ========================================================= */

.btn-cari {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    gap: 7px;

    padding: 11px 20px;

    color: var(--blue-700);

    border:
        1.5px solid var(--blue-400);

    border-radius: 12px;

    background: white;

    font-size: 14px;
    font-weight: 700;

    transition: all .25s ease;
}

.btn-cari:hover {
    color: white;

    border-color: var(--blue-500);

    background:
        linear-gradient(
            135deg,
            var(--blue-400),
            var(--blue-600)
        );

    transform: translateY(-2px);

    box-shadow:
        0 7px 17px rgba(91,188,228,.22);
}


/* =========================================================
   TABLE WRAPPER
   ========================================================= */

.table-responsive {
    border-radius: 15px;

    overflow: hidden;

    border:
        1px solid #e3f3f8;
}


/* =========================================================
   TABLE
   ========================================================= */

.table {
    margin-bottom: 0;

    border-collapse: separate;
    border-spacing: 0;
}


/* =========================================================
   TABLE HEADER
   ========================================================= */

.table thead th {
    padding: 15px 17px;

    color: var(--blue-700);

    background:
        linear-gradient(
            180deg,
            #edfaff,
            #e8f7fd
        );

    border: none;

    font-size: 12px;
    font-weight: 800;

    text-transform: uppercase;

    letter-spacing: .6px;
}


/* =========================================================
   TABLE BODY
   ========================================================= */

.table tbody td {
    padding: 17px;

    vertical-align: middle;

    color: #526f79;

    background: white;

    border-bottom:
        1px solid #e9f5f8;
}

.table tbody tr {
    transition:
        background .2s ease,
        transform .2s ease;
}

.table tbody tr:hover td {
    background: #f5fcff;
}

.table tbody tr:last-child td {
    border-bottom: none;
}


/* =========================================================
   NUMBER BADGE
   ========================================================= */

.badge-nomor {
    display: inline-flex;

    align-items: center;
    justify-content: center;

    width: 35px;
    height: 35px;

    color: var(--blue-700);

    border:
        1px solid var(--blue-300);

    border-radius: 50%;

    background:
        linear-gradient(
            135deg,
            #eaf8fd,
            #dff5fc
        );

    font-size: 13px;
    font-weight: 800;

    box-shadow:
        inset 0 1px 2px rgba(255,255,255,.7);
}


/* =========================================================
   NAMA JENIS
   ========================================================= */

.nama-jenis {
    display: inline-flex;
    align-items: center;

    color: #315f70;

    font-size: 14px;
    font-weight: 700;
}

.nama-jenis i {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    width: 30px;
    height: 30px;

    margin-right: 10px;

    color: var(--blue-600) !important;

    border-radius: 9px;

    background: var(--blue-100);
}


/* =========================================================
   JUMLAH PRODUK
   ========================================================= */

.badge-jumlah {
    display: inline-flex;
    align-items: center;

    gap: 5px;

    padding: 7px 12px;

    color: var(--blue-700);

    border:
        1px solid var(--blue-300);

    border-radius: 30px;

    background:
        linear-gradient(
            135deg,
            #f0fbff,
            #e4f7fc
        );

    font-size: 12.5px;
    font-weight: 700;
}

.badge-jumlah i {
    color: var(--blue-500);
}


/* =========================================================
   ACTION BUTTON
   ========================================================= */

.btn-edit,
.btn-hapus {
    display: inline-flex;
    align-items: center;
    justify-content: center;

    gap: 6px;

    padding: 7px 12px;

    border-radius: 9px;

    font-size: 12.5px;
    font-weight: 700;

    transition:
        transform .2s ease,
        box-shadow .2s ease,
        background .2s ease;
}


/* EDIT */

.btn-edit {
    color: var(--blue-700);

    border:
        1px solid var(--blue-300);

    background: #eaf8fd;

    text-decoration: none;
}

.btn-edit:hover {
    color: white;

    background: var(--blue-500);

    border-color: var(--blue-500);

    transform: translateY(-2px);

    box-shadow:
        0 5px 12px rgba(91,188,228,.22);
}


/* HAPUS */

.btn-hapus {
    color: white;

    border: none;

    background:
        linear-gradient(
            135deg,
            #ef8798,
            #e56f82
        );
}

.btn-hapus:hover {
    color: white;

    background:
        linear-gradient(
            135deg,
            #e56f82,
            #d65368
        );

    transform: translateY(-2px);

    box-shadow:
        0 5px 12px rgba(229,111,130,.22);
}


/* =========================================================
   ALERT
   ========================================================= */

.alert {
    display: flex;
    align-items: center;

    padding: 14px 18px;

    margin-bottom: 20px;

    border-radius: 13px;

    font-size: 14px;
    font-weight: 600;
}

.alert-success {
    color: #167457;

    background: #e8faf3;

    border:
        1px solid #b9ead8;
}

.alert-danger {
    color: #b33e51;

    background: #fff1f3;

    border:
        1px solid #f2c3cb;
}


/* =========================================================
   EMPTY STATE
   ========================================================= */

.empty-state {
    padding: 65px 20px !important;

    color: var(--text-muted);
}

.empty-state-icon {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 75px;
    height: 75px;

    margin: 0 auto;

    color: var(--blue-500);

    border-radius: 22px;

    background:
        linear-gradient(
            135deg,
            #eaf8fd,
            #dff5fc
        );

    font-size: 34px;

    box-shadow:
        0 8px 20px rgba(91,188,228,.10);
}

.empty-state p {
    color: #7895a0;

    font-size: 14px;
}


/* =========================================================
   PAGINATION
   ========================================================= */

.pagination {
    justify-content: flex-end;

    margin-top: 25px;

    gap: 4px;
}

.pagination .page-link {
    min-width: 35px;

    text-align: center;

    color: var(--blue-700);

    border:
        1px solid var(--blue-300);

    border-radius: 9px !important;

    background: white;

    transition: all .2s ease;
}

.pagination .page-link:hover {
    color: white;

    background: var(--blue-500);

    border-color: var(--blue-500);

    transform: translateY(-1px);
}

.pagination .active .page-link {
    color: white;

    border-color: var(--blue-500);

    background:
        linear-gradient(
            135deg,
            var(--blue-400),
            var(--blue-600)
        );

    box-shadow:
        0 4px 10px rgba(91,188,228,.20);
}


/* =========================================================
   ANIMATION
   ========================================================= */

@keyframes jenisFade {
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

@media(max-width: 768px) {

    .jenis-container {
        margin: 0 auto;

        padding:
            30px 15px 45px;
    }

    .jenis-title {
        font-size: 27px;
    }

    .jenis-subtitle {
        font-size: 13.5px;
    }

    .btn-tambah-wrapper {
        width: 100%;
    }

    .btn-tambah {
        width: 100%;

        justify-content: center;
    }

    .jenis-card-header {
        flex-direction: column;

        align-items: flex-start;

        padding: 20px;
    }

    .jenis-card-header p {
        font-size: 12px;
    }

    .jenis-card-body {
        padding: 18px;
    }

    .search-box {
        flex-direction: column;

        align-items: stretch;
    }

    .search-input-wrapper {
        max-width: 100%;
    }

    .btn-cari {
        width: 100%;
    }

    .table-responsive {
        border-radius: 12px;
    }

    .table {
        min-width: 720px;
    }

    .pagination {
        justify-content: center;
    }
}


/* =========================================================
   EXTRA SMALL
   ========================================================= */

@media(max-width: 480px) {

    .jenis-title {
        font-size: 24px;
    }

    .jenis-card-header h4 {
        font-size: 16px;
    }

    .jenis-card-body {
        padding: 15px;
    }

}

</style>


<div class="jenis-container">

    

    <div class="jenis-header">

        <h1 class="jenis-title">
            Jenis Produk
        </h1>

        <p class="jenis-subtitle">
            Kelola kategori dan jenis produk toko
            
        </p>

    </div>


    

    <?php if(session('success')): ?>

        <div class="alert alert-success">

            <i class="bi bi-check-circle-fill me-2"></i>

            <?php echo e(session('success')); ?>


        </div>

    <?php endif; ?>


    

    <?php if(session('error')): ?>

        <div class="alert alert-danger">

            <i class="bi bi-exclamation-circle-fill me-2"></i>

            <?php echo e(session('error')); ?>


        </div>

    <?php endif; ?>


    

    <div class="btn-tambah-wrapper">

        <a href="<?php echo e(route('jenis-produk.create')); ?>"
           class="btn-tambah">

            <i class="bi bi-plus-lg"></i>

            Tambah Jenis Produk

        </a>

    </div>


    

    <div class="jenis-card">


        

        <div class="jenis-card-header">

            <h4>

                <i class="bi bi-tags-fill"></i>

                Daftar Jenis Produk

            </h4>

            <p>

                <i class="bi bi-layers-fill me-1"></i>

                Total <?php echo e($totalJenis); ?> Jenis

            </p>

        </div>


        

        <div class="jenis-card-body">


            

            <form
                action="<?php echo e(route('jenis-produk.index')); ?>"
                method="GET"
                class="search-box"
            >

                <div class="search-input-wrapper">

                    <i class="bi bi-search"></i>

                    <input
                        type="text"
                        name="search"
                        value="<?php echo e(request('search')); ?>"
                        class="form-control"
                        placeholder="Cari nama jenis produk..."
                    >

                </div>


                <button
                    type="submit"
                    class="btn-cari"
                >

                    <i class="bi bi-search"></i>

                    Cari

                </button>

            </form>


            

            <div class="table-responsive">

                <table class="table">

                    <thead>

                        <tr>

                            <th style="width: 80px;">
                                No
                            </th>

                            <th>
                                Nama Jenis Produk
                            </th>

                            <th style="width: 190px;">
                                Jumlah Produk
                            </th>

                            <th style="width: 190px;">
                                Aksi
                            </th>

                        </tr>

                    </thead>


                    <tbody>

                        <?php $__empty_1 = true; $__currentLoopData = $jenisProduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

                            <tr>

                                

                                <td>

                                    <span class="badge-nomor">

                                        <?php echo e($jenisProduk->firstItem() + $loop->index); ?>


                                    </span>

                                </td>


                                

                                <td>

                                    <span class="nama-jenis">

                                        <i class="bi bi-tag-fill"></i>

                                        <?php echo e($item->nama); ?>


                                    </span>

                                </td>


                                

                                <td>

                                    <span class="badge-jumlah">

                                        <i class="bi bi-box-seam"></i>

                                        <?php echo e($item->produk_count); ?>


                                        Produk

                                    </span>

                                </td>


                                

                                <td>

                                    <a
                                        href="<?php echo e(route('jenis-produk.edit', $item->id)); ?>"
                                        class="btn-edit"
                                    >

                                        <i class="bi bi-pencil-fill"></i>

                                        Edit

                                    </a>


                                    <form
                                        action="<?php echo e(route('jenis-produk.destroy', $item->id)); ?>"
                                        method="POST"
                                        class="d-inline"
                                        onsubmit="return confirm('Yakin ingin menghapus jenis produk ini?')"
                                    >

                                        <?php echo csrf_field(); ?>

                                        <?php echo method_field('DELETE'); ?>

                                        <button
                                            type="submit"
                                            class="btn-hapus"
                                        >

                                            <i class="bi bi-trash-fill"></i>

                                            Hapus

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>

                            <tr>

                                <td
                                    colspan="4"
                                    class="text-center empty-state"
                                >

                                    <div class="empty-state-icon">

                                        <i class="bi bi-tags"></i>

                                    </div>

                                    <p class="mt-3 mb-0">

                                        Belum ada jenis produk.

                                    </p>

                                </td>

                            </tr>

                        <?php endif; ?>

                    </tbody>

                </table>

            </div>


            

            <?php echo e($jenisProduk->links()); ?>


        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PointOfSale\resources\views/jenis_produk/index.blade.php ENDPATH**/ ?>