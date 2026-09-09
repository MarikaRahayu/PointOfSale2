

<?php $__env->startSection('title', 'Edit Produk'); ?>

<?php $__env->startSection('content'); ?>

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


        <form action="<?php echo e(route('produk.update', $product->id)); ?>"
              method="POST"
              enctype="multipart/form-data">

            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>


            
            <div class="mb-4">

                <label class="form-label">
                    Foto Produk
                </label>


                <?php if($product->foto): ?>

                    <div class="mb-3">

                        <img
                            src="<?php echo e(asset('storage/'.$product->foto)); ?>"
                            width="150"
                            height="150"
                            style="object-fit: cover"
                            class="img-thumbnail">

                    </div>

                <?php endif; ?>


                <input
                    type="file"
                    name="foto"
                    class="form-control <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">


                <?php $__errorArgs = ['foto'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            
            <div class="mb-3">

                <label class="form-label">
                    Jenis Produk
                </label>


                <select
                    name="jenis_produk_id"
                    class="form-control <?php $__errorArgs = ['jenis_produk_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                    <option value="">
                        -- Pilih Jenis Produk --
                    </option>

                    <?php $__currentLoopData = $jenisProduk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jenis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <option
                            value="<?php echo e($jenis->id); ?>"
                            <?php if(old('jenis_produk_id', $product->jenis_produk_id) == $jenis->id): echo 'selected'; endif; ?>>

                            <?php echo e($jenis->nama); ?>


                        </option>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </select>


                <?php $__errorArgs = ['jenis_produk_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            
            <div class="mb-3">

                <label class="form-label">
                    Nama Produk
                </label>


                <input
                    type="text"
                    name="nama"
                    value="<?php echo e(old('nama', $product->nama)); ?>"
                    class="form-control <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="Masukkan nama produk">


                <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            
            <div class="mb-3">

                <label class="form-label">
                    Harga Beli
                </label>


                <input
                    type="number"
                    name="harga_beli"
                    value="<?php echo e(old('harga_beli', $product->harga_beli)); ?>"
                    class="form-control <?php $__errorArgs = ['harga_beli'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="Masukkan harga beli">


                <?php $__errorArgs = ['harga_beli'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            
            <div class="mb-3">

                <label class="form-label">
                    Harga Jual
                </label>


                <input
                    type="number"
                    name="harga_jual"
                    value="<?php echo e(old('harga_jual', $product->harga_jual)); ?>"
                    class="form-control <?php $__errorArgs = ['harga_jual'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="Masukkan harga jual">


                <?php $__errorArgs = ['harga_jual'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            
            <div class="mb-4">

                <label class="form-label">
                    Stok
                </label>


                <input
                    type="number"
                    name="stok"
                    value="<?php echo e(old('stok', $product->stok)); ?>"
                    class="form-control <?php $__errorArgs = ['stok'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                    placeholder="Masukkan jumlah stok">


                <?php $__errorArgs = ['stok'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>

                    <div class="invalid-feedback">
                        <?php echo e($message); ?>

                    </div>

                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

            </div>


            
            <div class="d-flex gap-2">

                <button
                    type="submit"
                    class="btn btn-simpan">

                    Simpan Perubahan

                </button>


                <a
                    href="<?php echo e(route('produk.index')); ?>"
                    class="btn btn-kembali">

                    ← Kembali

                </a>

            </div>


        </form>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PointOfSale2\resources\views/produk/edit.blade.php ENDPATH**/ ?>