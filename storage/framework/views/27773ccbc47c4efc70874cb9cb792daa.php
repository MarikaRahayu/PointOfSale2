

<?php $__env->startSection('content'); ?>

    <style>
        * {
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            min-height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            overflow-x: hidden;
        }

        /* =====================================================
           LOGIN PAGE
        ===================================================== */

        .login-page {
            position: relative;
            width: 100%;
            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            background-image:
                linear-gradient(rgba(7, 37, 69, 0.62),
                    rgba(7, 37, 69, 0.62)),
                url('<?php echo e(asset('p.jpg')); ?>');

            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            overflow: hidden;
        }

        /* =====================================================
           OVERLAY
        ===================================================== */

        .background-overlay {
            position: absolute;
            inset: 0;

            background:
                linear-gradient(90deg,
                    rgba(4, 28, 55, 0.72),
                    rgba(4, 28, 55, 0.38),
                    rgba(4, 28, 55, 0.18));

            z-index: 1;
        }

        /* =====================================================
           WRAPPER
        ===================================================== */

        .login-wrapper {
            position: relative;
            z-index: 5;

            width: 100%;
            max-width: 1450px;
            min-height: 100vh;

            padding: 120px 70px 80px;

            display: grid;
            grid-template-columns: 1fr 510px;

            align-items: center;

            gap: 70px;
        }

        /* =====================================================
           BRAND
        ===================================================== */

        .brand {
            position: absolute;

            top: 30px;
            left: 70px;

            display: flex;
            align-items: center;

            gap: 14px;

            z-index: 10;
        }

        .brand-logo {
            width: 65px;
            height: 65px;

            border-radius: 50%;

            background:
                linear-gradient(135deg,
                    #32c7f3,
                    #087ed0);

            border: 4px solid white;

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;

            font-size: 20px;
            font-weight: 900;

            box-shadow:
                0 8px 25px rgba(0, 0, 0, 0.25);
        }

        .brand-text h1 {
            margin: 0;

            color: white;

            font-size: 32px;

            font-weight: 900;

            text-shadow:
                0 2px 8px rgba(0, 0, 0, 0.25);
        }

        .brand-text p {
            margin: 3px 0 0;

            color: rgba(255, 255, 255, 0.9);

            font-size: 15px;
        }

        /* =====================================================
           LEFT SECTION
        ===================================================== */

        .left-section {
            color: white;
            padding-top: 30px;
        }

        .welcome-badge {
            display: inline-block;

            padding: 9px 18px;

            border-radius: 30px;

            background:
                rgba(48, 185, 239, 0.88);

            color: white;

            font-size: 15px;
            font-weight: bold;

            margin-bottom: 18px;
        }

        .left-section h2 {
            margin: 0;

            color: white;

            font-size: 48px;

            line-height: 1.15;

            font-weight: 900;

            text-shadow:
                0 3px 10px rgba(0, 0, 0, 0.3);
        }

        .left-section h2 span {
            color: #35c8ff;
        }

        .left-description {
            max-width: 540px;

            margin-top: 20px;

            color: rgba(255, 255, 255, 0.92);

            font-size: 19px;

            line-height: 1.6;

            text-shadow:
                0 2px 8px rgba(0, 0, 0, 0.3);
        }

        /* =====================================================
           FEATURES
        ===================================================== */

        .features {
            display: flex;

            max-width: 700px;

            margin-top: 55px;
        }

        .feature {
            flex: 1;

            padding: 0 24px;

            border-right:
                1px solid rgba(255, 255, 255, 0.4);
        }

        .feature:first-child {
            padding-left: 0;
        }

        .feature:last-child {
            border-right: none;
        }

        .feature-icon {
            width: 50px;
            height: 50px;

            margin-bottom: 12px;

            border-radius: 50%;

            background:
                rgba(48, 190, 241, 0.9);

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;

            font-size: 18px;
            font-weight: bold;
        }

        .feature h3 {
            margin: 0 0 6px;

            color: white;

            font-size: 16px;

            font-weight: 800;
        }

        .feature p {
            margin: 0;

            color: rgba(255, 255, 255, 0.85);

            font-size: 13px;

            line-height: 1.5;
        }

        /* =====================================================
           SLOGAN
        ===================================================== */

        .slogan {
            position: absolute;

            top: 35px;
            right: 70px;

            z-index: 10;

            color: white;

            text-align: center;

            font-size: 17px;

            line-height: 1.4;

            font-weight: bold;

            font-style: italic;

            transform: rotate(-5deg);

            text-shadow:
                0 2px 7px rgba(0, 0, 0, 0.35);
        }

        .slogan-line {
            width: 90px;

            height: 3px;

            margin: 6px auto 0;

            background: #20baf0;

            border-radius: 10px;
        }

        /* =====================================================
           LOGIN CARD
        ===================================================== */

        .login-card {
            width: 100%;
            max-width: 510px;

            padding: 32px 40px;

            background: rgba(255, 255, 255, 0.98);

            border-radius: 25px;

            box-shadow:
                0 20px 60px rgba(0, 0, 0, 0.3);

            justify-self: center;
        }

        /* =====================================================
           LOGIN LOGO
        ===================================================== */

        .login-logo-wrapper {
            display: flex;

            justify-content: center;

            margin-bottom: 12px;
        }

        .login-logo {
            width: 82px;
            height: 82px;

            border-radius: 50%;

            background:
                linear-gradient(135deg,
                    #32c7f3,
                    #087ed0);

            border: 7px solid #dff5ff;

            display: flex;
            align-items: center;
            justify-content: center;

            color: white;

            font-size: 25px;
            font-weight: 900;

            box-shadow:
                0 8px 22px rgba(0, 140, 210, 0.25);
        }

        /* =====================================================
           TITLE
        ===================================================== */

        .login-title {
            margin: 0;

            text-align: center;

            color: #128bdc;

            font-size: 34px;

            font-weight: 900;
        }

        .login-subtitle {
            margin: 4px 0 10px;

            text-align: center;

            color: #7893aa;

            font-size: 15px;
        }

        .login-line {
            width: 40px;
            height: 4px;

            margin: 10px auto 14px;

            border-radius: 10px;

            background: #149fe5;
        }

        .login-info {
            margin: 0 0 24px;

            text-align: center;

            color: #6d89a3;

            font-size: 14px;
        }

        /* =====================================================
           ERROR
        ===================================================== */

        .login-error {
            padding: 10px 13px;

            margin-bottom: 18px;

            border-radius: 9px;

            background: #fff0f0;

            border: 1px solid #ffcaca;

            color: #c0392b;

            font-size: 14px;
        }

        /* =====================================================
           FORM
        ===================================================== */

        .form-group {
            margin-bottom: 19px;
        }

        .form-label {
            display: block;

            margin-bottom: 8px;

            color: #174f80;

            font-size: 15px;

            font-weight: 700;
        }

        .input-wrapper {
            position: relative;

            width: 100%;
        }

        .login-input {
            width: 100%;

            height: 53px;

            padding: 0 17px;

            border: 2px solid #c1e1f7;

            border-radius: 12px;

            outline: none;

            background: #f8fcff;

            color: #315b7d;

            font-size: 15px;

            transition: 0.25s ease;
        }

        /* Ruang untuk mata password */
        #password {
            padding-right: 55px;
        }

        .login-input::placeholder {
            color: #8aa5bd;
        }

        .login-input:focus {
            border-color: #29afe9;

            background: white;

            box-shadow:
                0 0 0 4px rgba(41, 175, 233, 0.12);
        }

        /* =====================================================
           PASSWORD TOGGLE

           MATA SELALU ADA

           PASSWORD TERLIHAT:
           MATA NORMAL

           PASSWORD TIDAK TERLIHAT:
           MATA + GARIS /
        ===================================================== */

        .password-toggle {
            position: absolute;

            right: 8px;
            top: 50%;

            transform: translateY(-50%);

            width: 40px;
            height: 40px;

            padding: 0;

            border: none;

            background: transparent;

            cursor: pointer;

            display: flex;

            align-items: center;
            justify-content: center;

            border-radius: 8px;
        }

        .password-toggle:hover {
            background: #eaf7ff;
        }

        /* =====================================================
           MATA BASIC
        ===================================================== */

        .eye {
            position: relative;

            width: 22px;
            height: 14px;

            border: 2px solid #6f91ac;

            border-radius: 50%;

            display: block;
        }

        /* PUPIL */
        .eye::after {
            content: "";

            position: absolute;

            width: 6px;
            height: 6px;

            border-radius: 50%;

            background: #6f91ac;

            top: 50%;
            left: 50%;

            transform:
                translate(-50%, -50%);
        }

        /* =====================================================
           GARIS "/" PADA MATA

           DEFAULT = PASSWORD TIDAK TERLIHAT

           JADI GARIS MUNCUL
        ===================================================== */

        .eye::before {
            content: "";

            position: absolute;

            width: 27px;
            height: 2px;

            background: #6f91ac;

            top: 50%;
            left: 50%;

            transform:
                translate(-50%, -50%) rotate(-45deg);

            z-index: 5;

            border-radius: 2px;
        }

        /* =====================================================
           KETIKA PASSWORD TERLIHAT

           CLASS "showing" DITAMBAHKAN

           GARIS "/" DIHILANGKAN
        ===================================================== */

        .password-toggle.showing .eye::before {
            display: none;
        }

        /* WARNA HOVER */
        .password-toggle:hover .eye {
            border-color: #148edc;
        }

        .password-toggle:hover .eye::after {
            background: #148edc;
        }

        .password-toggle:hover .eye::before {
            background: #148edc;
        }

        /* =====================================================
           LOGIN BUTTON
        ===================================================== */

        .btn-login {
            width: 100%;

            height: 54px;

            border: none;

            border-radius: 13px;

            background:
                linear-gradient(135deg,
                    #32c3ed,
                    #138bdc);

            color: white;

            font-size: 17px;

            font-weight: 800;

            cursor: pointer;

            box-shadow:
                0 8px 20px rgba(20, 143, 220, 0.25);

            transition: 0.25s ease;
        }

        .btn-login:hover {
            transform: translateY(-2px);

            background:
                linear-gradient(135deg,
                    #159ddd,
                    #0874be);

            box-shadow:
                0 11px 25px rgba(20, 143, 220, 0.35);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        /* =====================================================
           FOOTER
        ===================================================== */

        .login-footer {
            margin-top: 23px;

            padding-top: 17px;

            border-top:
                1px solid #e0edf5;

            text-align: center;

            color: #7894ac;

            font-size: 14px;
        }

        .login-footer a {
            color: #078ddd;

            font-weight: 800;

            text-decoration: none;
        }

        .login-footer a:hover {
            text-decoration: underline;

            color: #056da9;
        }

        /* =====================================================
           COPYRIGHT
        ===================================================== */

        .copyright {
            position: absolute;

            left: 50%;
            bottom: 15px;

            transform: translateX(-50%);

            z-index: 10;

            color: rgba(255, 255, 255, 0.9);

            font-size: 12px;

            white-space: nowrap;

            text-shadow:
                0 2px 5px rgba(0, 0, 0, 0.3);
        }

        /* =====================================================
           RESPONSIVE 1200
        ===================================================== */

        @media (max-width: 1200px) {

            .login-wrapper {
                grid-template-columns: 1fr 470px;

                gap: 40px;

                padding-left: 45px;
                padding-right: 45px;
            }

            .brand {
                left: 45px;
            }

            .slogan {
                right: 40px;
            }

            .left-section h2 {
                font-size: 40px;
            }

            .left-description {
                font-size: 17px;
            }

            .features {
                margin-top: 40px;
            }
        }

        /* =====================================================
           RESPONSIVE 992
        ===================================================== */

        @media (max-width: 992px) {

            .login-page {
                overflow-y: auto;
            }

            .login-wrapper {
                grid-template-columns: 1fr;

                max-width: 650px;

                padding:
                    120px 25px 80px;
            }

            .brand {
                top: 20px;
                left: 25px;
            }

            .brand-logo {
                width: 55px;
                height: 55px;

                font-size: 18px;
            }

            .brand-text h1 {
                font-size: 27px;
            }

            .brand-text p {
                font-size: 13px;
            }

            .slogan {
                display: none;
            }

            .left-section {
                padding-top: 0;

                text-align: center;
            }

            .left-description {
                margin-left: auto;
                margin-right: auto;
            }

            .features {
                margin-left: auto;
                margin-right: auto;
            }

            .feature {
                text-align: center;
            }

            .login-card {
                max-width: 520px;
            }
        }

        /* =====================================================
           RESPONSIVE 576
        ===================================================== */

        @media (max-width: 576px) {

            .login-wrapper {
                padding:
                    100px 16px 65px;
            }

            .brand {
                top: 15px;
                left: 16px;
            }

            .brand-logo {
                width: 48px;
                height: 48px;

                font-size: 15px;
            }

            .brand-text h1 {
                font-size: 21px;
            }

            .brand-text p {
                font-size: 10px;
            }

            .left-section h2 {
                font-size: 30px;
            }

            .left-description {
                font-size: 15px;
            }

            .features {
                display: none;
            }

            .login-card {
                padding:
                    27px 20px 25px;

                border-radius: 21px;
            }

            .login-logo {
                width: 75px;
                height: 75px;

                font-size: 21px;
            }

            .login-title {
                font-size: 29px;
            }

            .login-subtitle {
                font-size: 14px;
            }

            .login-info {
                font-size: 13px;
            }

            .copyright {
                bottom: 10px;

                font-size: 9px;
            }
        }
    </style>


    <div class="login-page">

        
        <div class="background-overlay"></div>


        

        <div class="brand">

            <div class="brand-logo">
                POS
            </div>

            <div class="brand-text">

                <h1>
                    POS Marika
                </h1>

                <p>
                    Point Of Sales System
                </p>

            </div>

        </div>


        

        <div class="slogan">

            Bersama POS Marika
            <br>

            Tumbuh Lebih Besar

            <div class="slogan-line"></div>

        </div>


        

        <div class="login-wrapper">


            

            <div class="left-section">

                <div class="welcome-badge">
                    Selamat Datang
                </div>


                <h2>

                    Kelola Transaksi,

                    <br>

                    <span>
                        Lebih Mudah!
                    </span>

                </h2>


                <p class="left-description">

                    Sistem kasir modern untuk membantu
                    bisnis Anda berjalan lebih efisien,
                    cepat dan akurat.

                </p>


                

                <div class="features">


                    

                    <div class="feature">

                        <div class="feature-icon">
                            1
                        </div>

                        <h3>
                            Proses Cepat
                        </h3>

                        <p>
                            Transaksi lebih cepat
                            <br>
                            dan efisien
                        </p>

                    </div>


                    

                    <div class="feature">

                        <div class="feature-icon">
                            2
                        </div>

                        <h3>
                            Aman & Terpercaya
                        </h3>

                        <p>
                            Data bisnis Anda
                            <br>
                            selalu terlindungi
                        </p>

                    </div>


                    

                    <div class="feature">

                        <div class="feature-icon">
                            3
                        </div>

                        <h3>
                            Laporan Lengkap
                        </h3>

                        <p>
                            Pantau penjualan
                            <br>
                            dengan mudah
                        </p>

                    </div>

                </div>

            </div>


            

            <div class="login-card">


                

                <div class="login-logo-wrapper">

                    <div class="login-logo">
                        POS
                    </div>

                </div>


                

                <h1 class="login-title">
                    POS Marika
                </h1>


                <p class="login-subtitle">
                    Point Of Sales System
                </p>


                <div class="login-line"></div>


                <p class="login-info">
                    Silakan login untuk melanjutkan
                </p>


                

                <?php if($errors->any()): ?>

                    <div class="login-error">

                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div>
                                <?php echo e($error); ?>

                            </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                <?php endif; ?>


                

                <form action="<?php echo e(route('auth')); ?>" method="POST">

                    <?php echo csrf_field(); ?>


                    

                    <div class="form-group">

                        <label for="email" class="form-label">
                            Email
                        </label>

                        <div class="input-wrapper">

                            <input type="email" name="email" id="email" class="login-input" placeholder="Masukkan Email"
                                value="<?php echo e(old('email')); ?>" required autocomplete="email">

                        </div>

                    </div>


                    

                    <div class="form-group">

                        <label for="password" class="form-label">
                            Password
                        </label>

                        <div class="input-wrapper">

                            <input type="password" name="password" id="password" class="login-input"
                                placeholder="Masukkan Password" required autocomplete="current-password">


                            

                            <button type="button" class="password-toggle" id="togglePassword"
                                aria-label="Tampilkan password" title="Tampilkan password">

                                <span class="eye"></span>

                            </button>

                        </div>

                    </div>


                    

                    <button type="submit" class="btn-login">
                        Login
                    </button>

                </form>


                

                <div class="login-footer">

                    Belum punya akun?

                    <a href="https://wa.me/6289507959279?text=Halo%20Admin%20POS%20Marika%2C%20saya%20ingin%20meminta%20akses%20akun."
                        target="_blank" rel="noopener noreferrer">
                        Hubungi Admin
                    </a>

                </div>

            </div>

        </div>


        

        <div class="copyright">

            © <?php echo e(date('Y')); ?>

            POS Marika. All rights reserved.

        </div>

    </div>


    

    <script>
        document.addEventListener('DOMContentLoaded', function () {

            const password =
                document.getElementById('password');

            const togglePassword =
                document.getElementById('togglePassword');


            togglePassword.addEventListener('click', function () {

                if (password.type === 'password') {

                    /*
                     * PASSWORD TERLIHAT
                     */
                    password.type = 'text';


                    /*
                     * HAPUS GARIS /
                     * MATA TETAP ADA
                     */
                    togglePassword.classList.add('showing');


                    togglePassword.setAttribute(
                        'aria-label',
                        'Sembunyikan password'
                    );

                    togglePassword.setAttribute(
                        'title',
                        'Sembunyikan password'
                    );

                } else {

                    /*
                     * PASSWORD DISEMBUNYIKAN
                     */
                    password.type = 'password';


                    /*
                     * MUNCULKAN GARIS /
                     * MATA TETAP ADA
                     */
                    togglePassword.classList.remove('showing');


                    togglePassword.setAttribute(
                        'aria-label',
                        'Tampilkan password'
                    );

                    togglePassword.setAttribute(
                        'title',
                        'Tampilkan password'
                    );

                }

            });

        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.auth', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PointOfSale2\resources\views/users/login.blade.php ENDPATH**/ ?>