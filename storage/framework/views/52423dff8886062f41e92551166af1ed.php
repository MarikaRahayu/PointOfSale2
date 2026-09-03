

<?php $__env->startSection('title', 'Produk'); ?>

<?php $__env->startSection('content'); ?>

<style>

/* =========================
   BABY BLUE PRODUCT PAGE
   ========================= */

:root {
    --baby-blue: #89CFF0;
    --blue-main: #5BBCE4;
    --blue-dark: #247BA0;
    --blue-deep: #155E75;
    --blue-soft: #EAF8FD;
    --blue-light: #F5FCFF;
    --blue-border: #B9E5F7;
    --white: #FFFFFF;
}


/* =========================
   BACKGROUND
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
   MAIN CONTAINER
   ========================= */

.product-container {

    background: rgba(255, 255, 255, 0.96);

    padding: 30px;

    border-radius: 22px;

    box-shadow:
        0 10px 30px rgba(36, 123, 160, 0.12);

    border: 1px solid #D9F1FA;

    transition: .3s ease;

}


/* =========================
   TITLE
   ========================= */

.product-title {

    color: var(--blue-dark);

    font-weight: 800;

    font-size: 30px;

    letter-spacing: .3px;

    margin-bottom: 5px;

}


/* =========================
   TOTAL PRODUK
   ========================= */

.total-box {

    background:
        linear-gradient(
            135deg,
            #E5F7FD,
            #D4F2FC
        );

    border: 2px solid var(--blue-border);

    padding: 14px 22px;

    border-radius: 15px;

    color: var(--blue-dark);

    font-weight: 700;

    box-shadow:
        0 5px 15px rgba(91, 188, 228, 0.12);

}


/* =========================
   TOMBOL TAMBAH
   ========================= */

.btn-tambah {

    background:
        linear-gradient(
            135deg,
            #89CFF0,
            #5BBCE4
        );

    color: white;

    border: none;

    border-radius: 10px;

    padding: 9px 18px;

    font-weight: 600;

    box-shadow:
        0 5px 12px rgba(91, 188, 228, 0.25);

    transition: all .25s ease;

}


.btn-tambah:hover {

    background:
        linear-gradient(
            135deg,
            #5BBCE4,
            #247BA0
        );

    color: white;

    transform: translateY(-2px);

    box-shadow:
        0 7px 15px rgba(36, 123, 160, 0.25);

}


/* =========================
   SEARCH INPUT
   ========================= */

.form-control {

    border: 2px solid var(--blue-border);

    border-radius: 10px;

    padding: 10px 14px;

    color: var(--blue-deep);

    background: #FFFFFF;

    transition: all .25s ease;

}


.form-control::placeholder {

    color: #8CB8C9;

}


.form-control:focus {

    border-color: var(--blue-main);

    box-shadow:
        0 0 0 4px rgba(91, 188, 228, 0.13);

}


/* =========================
   TOMBOL CARI
   ========================= */

.btn-cari {

    border: 2px solid var(--blue-main);

    color: var(--blue-dark);

    background: white;

    border-radius: 10px;

    font-weight: 600;

    padding-left: 20px;

    padding-right: 20px;

    transition: all .25s ease;

}


.btn-cari:hover {

    background:
        linear-gradient(
            135deg,
            #89CFF0,
            #5BBCE4
        );

    border-color: var(--blue-main);

    color: white;

    transform: translateY(-1px);

}


/* =========================
   TABLE
   ========================= */

.table-responsive {

    border-radius: 16px;

    overflow-x: auto;

    box-shadow:
        0 5px 18px rgba(36, 123, 160, 0.08);

}


.table {

    margin-bottom: 0;

    border-color: var(--blue-border) !important;

    background: white;

}


/* =========================
   TABLE HEADER
   ========================= */

.table thead th {

    background:
        linear-gradient(
            135deg,
            #89CFF0,
            #5BBCE4
        ) !important;

    color: white !important;

    text-align: center;

    vertical-align: middle;

    font-weight: 700;

    border-color: #74C5E8 !important;

    padding: 14px 10px;

    white-space: nowrap;

}


/* =========================
   TABLE BODY
   ========================= */

.table tbody td {

    color: #315F70;

    vertical-align: middle;

    border-color: #D7EFF8 !important;

    padding: 12px 10px;

}


.table tbody tr {

    transition:
        all .2s ease;

}


.table tbody tr:nth-child(even) {

    background: #F8FDFF;

}


.table tbody tr:hover {

    background:
        #EAF8FD !important;

    transform: scale(1.002);

}


/* =========================
   FOTO PRODUK
   ========================= */

.img-thumbnail {

    border: 3px solid #B9E5F7;

    border-radius: 12px;

    padding: 3px;

    background: white;

    transition: all .25s ease;

}


.img-thumbnail:hover {

    border-color: var(--blue-main);

    transform: scale(1.06);

    box-shadow:
        0 5px 12px rgba(91, 188, 228, 0.20);

}


/* =========================
   TEKS HARGA
   ========================= */

.table tbody td:nth-child(6),
.table tbody td:nth-child(7) {

    color: var(--blue-dark);

    font-weight: 600;

}


/* =========================
   STOK
   ========================= */

.table tbody td:nth-child(8),
.table tbody td:nth-child(9) {

    color: var(--blue-deep);

    font-weight: 700;

}


/* =========================
   TOMBOL EDIT
   ========================= */

.btn-edit {

    background: #DDF4FC;

    color: #247BA0;

    border: 1px solid #A9DFF1;

    border-radius: 8px;

    font-weight: 600;

    transition: all .2s ease;

}


.btn-edit:hover {

    background: #89CFF0;

    color: white;

    border-color: #89CFF0;

    transform: translateY(-1px);

}


/* =========================
   TOMBOL HAPUS
   ========================= */

.btn-hapus {

    background: #E88B9A;

    color: white;

    border: none;

    border-radius: 8px;

    font-weight: 600;

    transition: all .2s ease;

}


.btn-hapus:hover {

    background: #D65F72;

    color: white;

    transform: translateY(-1px);

}


/* =========================
   ALERT
   ========================= */

.alert-success {

    background: #E0F7EE;

    color: #147A57;

    border: 1px solid #A9E5D0;

    border-radius: 12px;

}


.alert-danger {

    background: #FFF0F2;

    color: #B33A4B;

    border: 1px solid #F1C0C8;

    border-radius: 12px;

}


/* =========================
   PAGINATION
   ========================= */

.pagination {

    gap: 4px;

}


.pagination .page-link {

    color: var(--blue-dark);

    border: 1px solid var(--blue-border);

    background: white;

    border-radius: 8px;

    margin: 0 2px;

    transition: all .2s ease;

}


.pagination .page-link:hover {

    color: white;

    background: var(--blue-main);

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

.table tbody .text-muted {

    color: #8BAFBC !important;

    padding: 25px;

}


/* =========================
   RESPONSIVE
   ========================= */

@media (max-width: 768px) {

    .product-container {

        padding: 20px;

        border-radius: 16px;

    }

    .product-title {

        font-size: 25px;

    }

    .total-box {

        width: 100%;

    }

    .btn-tambah {

        width: 100%;

    }

}


/* =========================
   SMOOTH ANIMATION
   ========================= */

.product-container {

    animation: productFade .5s ease;

}


@keyframes productFade {

    from {

        opacity: 0;

        transform: translateY(10px);

    }

    to {

        opacity: 1;

        transform: translateY(0);

    }

}

</style>





<div class="container mt-5">


<div class="product-container">





<h1 class="product-title mb-2">

    Halaman Produk

</h1>







<div class="d-flex gap-3 mb-4 flex-wrap">

    <div class="total-box">
        Total Produk : <?php echo e($products->total()); ?> Produk
    </div>

</div>







<?php if(session('success')): ?>

<div class="alert alert-success">

    <?php echo e(session('success')); ?>


</div>

<?php endif; ?>






<?php if(session('error')): ?>

<div class="alert alert-danger">

    <?php echo e(session('error')); ?>


</div>

<?php endif; ?>










<?php if(strtolower(optional(auth()->user()->role)->name) !== 'kasir'): ?>
<div class="mb-3">


<a href="<?php echo e(route('produk.create')); ?>"
   class="btn btn-tambah btn-sm">


+ Tambah Produk


</a>


</div>
<?php endif; ?>









<form action="<?php echo e(route('produk.index')); ?>"
      method="GET"
      class="mb-4">


<div class="d-flex gap-2">



<input type="text"
       name="search"
       class="form-control"
       placeholder="Cari nama produk..."
       value="<?php echo e(request('search')); ?>">





<button class="btn btn-cari">

Cari

</button>



</div>


</form>









<div class="table-responsive">



<table class="table table-bordered align-middle">





<thead>


<tr>


<th>No</th>

<th>User</th>

<th>Foto</th>

<th>Nama Produk</th>

<th>Jenis Produk</th>

<th>Harga Beli</th>

<th>Harga Jual</th>

<th>Stok</th>

<th>Sisa Produk</th>

<?php if(strtolower(optional(auth()->user()->role)->name) !== 'kasir'): ?>
<th>Aksi</th>
<?php endif; ?>


</tr>


</thead>









<tbody>



<?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>



<tr>




<td class="text-center">


<?php echo e($products->firstItem() + $loop->index); ?>



</td>






<td>


<?php echo e($product->user->name ?? '-'); ?>



</td>







<td class="text-center">



<?php if($product->foto): ?>



<img src="<?php echo e(asset('storage/'.$product->foto)); ?>"
     width="70"
     height="70"
     style="object-fit:cover"
     class="img-thumbnail">



<?php else: ?>


<span class="text-muted">

Tidak ada foto

</span>



<?php endif; ?>



</td>








<td>


<?php echo e($product->nama); ?>



</td>







<td>


<?php echo e($product->jenisProduk->nama ?? '-'); ?>



</td>







<td>


Rp <?php echo e(number_format($product->harga_beli,0,',','.')); ?>



</td>







<td>


Rp <?php echo e(number_format($product->harga_jual,0,',','.')); ?>



</td>







<td class="text-center">


<?php echo e($product->stok); ?>



</td>







<td class="text-center">


<?php echo e($product->stok); ?>



</td>







<?php if(strtolower(optional(auth()->user()->role)->name) !== 'kasir'): ?>
<td>



<div class="d-flex gap-1">





<a href="<?php echo e(route('produk.edit',$product->id)); ?>"
   class="btn btn-edit btn-sm">


Edit


</a>








<form action="<?php echo e(route('produk.destroy',$product->id)); ?>"
      method="POST"
      onsubmit="return confirm('Yakin ingin menghapus produk ini?')">



<?php echo csrf_field(); ?>

<?php echo method_field('DELETE'); ?>




<button class="btn btn-hapus btn-sm">


Hapus


</button>



</form>





</div>



</td>
<?php endif; ?>







</tr>







<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>




<tr>


<td colspan="10"
    class="text-center text-muted">


Data produk tidak ditemukan


</td>


</tr>





<?php endif; ?>






</tbody>






</table>




</div>












<div class="mt-3">


<?php echo e($products->links()); ?>



</div>






</div>


</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PointOfSale\resources\views/produk/index.blade.php ENDPATH**/ ?>