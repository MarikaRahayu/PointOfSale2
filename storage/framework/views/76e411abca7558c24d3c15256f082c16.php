

<?php $__env->startSection('content'); ?>

<style>

    body {
        background: linear-gradient(
            135deg,
            #dff3ff,
            #eef8ff,
            #cfeeff
        ) !important;
    }

    .login-card {
        background: #ffffff;
        border-radius: 22px;
        padding: 35px;
        box-shadow: 0 12px 35px rgba(52, 152, 219, 0.18);
        border: 1px solid #d6efff;
    }

    /* Logo */
    .logo {
        width: 70px;
        height: 70px;
        margin: 0 auto 15px;

        display: flex;
        align-items: center;
        justify-content: center;

        background: #5dade2;
        color: white;

        border-radius: 50%;
        font-size: 32px;

        box-shadow: 0 6px 15px rgba(52, 152, 219, .25);
    }

    /* Judul */
    .login-card h2 {
        color: #3498db;
        font-weight: 800;
        margin-bottom: 5px;
    }

    .login-card p {
        color: #6c9bb8;
        margin-bottom: 30px;
    }

    /* Label */
    .login-card label {
        color: #2471a3;
        font-weight: 600;
        margin-bottom: 7px;
    }

    /* Input */
    .login-card .form-control {
        border: 2px solid #b9e2ff;
        border-radius: 12px;
        padding: 11px 14px;
        transition: all .25s ease;
    }

    .login-card .form-control:focus {
        border-color: #5dade2;
        box-shadow: 0 0 0 4px rgba(93, 173, 226, .15);
    }

    .login-card .form-control::placeholder {
        color: #9bbdce;
    }

    /* Tombol Login */
    .btn-login {
        background: linear-gradient(
            135deg,
            #5dade2,
            #3498db
        );

        color: white;
        border: none;
        border-radius: 12px;

        padding: 12px;
        font-weight: 700;

        box-shadow: 0 5px 15px rgba(52, 152, 219, .25);

        transition: all .25s ease;
    }

    .btn-login:hover {
        background: linear-gradient(
            135deg,
            #3498db,
            #2471a3
        );

        color: white;

        transform: translateY(-2px);

        box-shadow: 0 7px 18px rgba(52, 152, 219, .3);
    }

</style>


<div class="login-card">

    <div class="text-center">

        <div class="logo">
            🛒
        </div>

        <h2>
            POS Marika
        </h2>

        <p>
            Point Of Sales System
        </p>

    </div>


    <form action="<?php echo e(route('auth')); ?>" method="POST">

        <?php echo csrf_field(); ?>


        <div class="mb-3">

            <label>
                Email
            </label>

            <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Masukkan Email"
                required>

        </div>


        <div class="mb-4">

            <label>
                Password
            </label>

            <input
                type="password"
                name="password"
                class="form-control"
                placeholder="Masukkan Password"
                required>

        </div>


        <button
            type="submit"
            class="btn btn-login w-100">

            Login

        </button>

    </form>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PointOfSale\resources\views/users/login.blade.php ENDPATH**/ ?>