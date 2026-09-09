

<?php $__env->startSection('content'); ?>

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

                    <form action="<?php echo e(route('users.store')); ?>" method="POST">

                        <?php echo csrf_field(); ?>

                        
                        <div class="mb-3">

                            <label class="form-label-custom">
                                Nama
                            </label>

                            <input
                                type="text"
                                name="name"
                                value="<?php echo e(old('name')); ?>"
                                class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                              >

                            <?php $__errorArgs = ['name'];
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

                            <label class="form-label-custom">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                value="<?php echo e(old('email')); ?>"
                                class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               >
                            <?php $__errorArgs = ['email'];
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

                            <label class="form-label-custom">
                                Password
                            </label>

                            <input
                                type="password"
                                name="password"
                                class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                               >
                            <?php $__errorArgs = ['password'];
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

                            <label class="form-label-custom">
                                Role
                            </label>

                            <select
                                name="role_id"
                                class="form-select <?php $__errorArgs = ['role_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>">

                                <option value="">
                                    -- Pilih Role --
                                </option>

                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <option value="<?php echo e($role->id); ?>"
                                        <?php echo e(old('role_id') == $role->id ? 'selected' : ''); ?>>

                                        <?php echo e(ucfirst($role->name)); ?>


                                    </option>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </select>

                            <?php $__errorArgs = ['role_id'];
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

                        
                        <div class="d-flex justify-content-between">

                            <a href="<?php echo e(route('users.index')); ?>"
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PointOfSale2\resources\views/users/create.blade.php ENDPATH**/ ?>