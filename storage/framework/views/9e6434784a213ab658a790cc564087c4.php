
<link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">



<nav class="navbar navbar-expand-lg navbar-custom shadow-sm">

    <div class="container-fluid px-4">

        
        <a href="<?php echo e(url('/')); ?>" class="navbar-brand brand-logo">

            <img src="<?php echo e(asset('images/smk.png')); ?>"
                 alt="Logo SMK"
                 width="36"
                 height="36"
                 class="logo-img">

            <span>POS</span>

        </a>


        
        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation">

            <i class="bi bi-list"></i>

        </button>


        
        <div class="collapse navbar-collapse" id="navbarNav">

            <div class="nav-panel ms-4">

                <ul class="navbar-nav gap-1">


                    
                    <li class="nav-item">

                        <a href="<?php echo e(url('/')); ?>"
                           class="nav-link <?php echo e(Request::is('/') ? 'active' : ''); ?>">

                            <i class="bi bi-house-door-fill"></i>

                            <span>Dashboard</span>

                        </a>

                    </li>


                    
                    <?php if(
                        auth()->check() &&
                        strtolower(optional(auth()->user()->role)->name) !== 'kasir' &&
                        Route::has('users.index')
                    ): ?>

                        <li class="nav-item">

                            <a href="<?php echo e(route('users.index')); ?>"
                               class="nav-link <?php echo e(Request::is('users*') ? 'active' : ''); ?>">

                                <i class="bi bi-people-fill"></i>

                                <span>User</span>

                            </a>

                        </li>

                    <?php endif; ?>


                    
                    <?php if(
                        auth()->check() &&
                        strtolower(optional(auth()->user()->role)->name) !== 'kasir' &&
                        Route::has('jenis-produk.index')
                    ): ?>

                        <li class="nav-item">

                            <a href="<?php echo e(route('jenis-produk.index')); ?>"
                               class="nav-link <?php echo e(Request::is('jenis-produk*') ? 'active' : ''); ?>">

                                <i class="bi bi-tags-fill"></i>

                                <span>Jenis Produk</span>

                            </a>

                        </li>

                    <?php endif; ?>


                    
                    <?php if(Route::has('produk.index')): ?>

                        <li class="nav-item">

                            <a href="<?php echo e(route('produk.index')); ?>"
                               class="nav-link <?php echo e(Request::is('produk*') ? 'active' : ''); ?>">

                                <i class="bi bi-box-seam-fill"></i>

                                <span>Produk</span>

                            </a>

                        </li>

                    <?php endif; ?>


                    
                    <?php if(Route::has('penjualan.index')): ?>

                        <li class="nav-item">

                            <a href="<?php echo e(route('penjualan.index')); ?>"
                               class="nav-link <?php echo e(Request::is('penjualan*') ? 'active' : ''); ?>">

                                <i class="bi bi-cart-check-fill"></i>

                                <span>Penjualan</span>

                            </a>

                        </li>

                    <?php endif; ?>


                    
                    <?php if(
                        auth()->check() &&
                        Route::has('tentang')
                    ): ?>

                        <li class="nav-item">

                            <a href="<?php echo e(route('tentang')); ?>"
                               class="nav-link <?php echo e(Request::is('tentang*') ? 'active' : ''); ?>">

                                <i class="bi bi-info-circle-fill"></i>

                                <span>Tentang</span>

                            </a>

                        </li>

                    <?php endif; ?>


                </ul>

            </div>


            
            <div class="ms-auto d-flex align-items-center gap-3">


                
                <?php if(auth()->check()): ?>

                    <div class="user-info">

                        <div class="user-icon">

                            <i class="bi bi-person-fill"></i>

                        </div>

                        <div class="user-text">

                            <small>Login sebagai</small>

                            <strong>
                                <?php echo e(auth()->user()->name); ?>

                            </strong>

                        </div>

                    </div>

                <?php endif; ?>


                
                <?php if(Route::has('logout')): ?>

                    <form action="<?php echo e(route('logout')); ?>"
                          method="POST"
                          class="m-0">

                        <?php echo csrf_field(); ?>

                        <button type="submit" class="btn-logout">

                            <i class="bi bi-box-arrow-right"></i>

                            <span>Logout</span>

                        </button>

                    </form>

                <?php endif; ?>


            </div>

        </div>

    </div>

</nav>




<style>

/* =========================
   NAVBAR UTAMA
========================= */

.navbar-custom {

    background: linear-gradient(
        90deg,
        #7fd0ea,
        #4aa9e0
    );

    min-height: 74px;

    padding: 12px 0;

    position: sticky;

    top: 0;

    z-index: 1000;

    border-radius: 0 0 20px 20px;

}


/* =========================
   LOGO
========================= */

.brand-logo {

    display: flex;

    align-items: center;

    gap: 10px;

    color: white !important;

    font-size: 20px;

    font-weight: 800;

    text-decoration: none;

}


.logo-img {

    width: 36px;

    height: 36px;

    object-fit: contain;

    background: white;

    border-radius: 50%;

    padding: 3px;

}


/* =========================
   PANEL MENU
========================= */

.nav-panel {

    background: rgba(255, 255, 255, .10);

    border-radius: 14px;

    padding: 6px;

}


/* =========================
   MENU NAVBAR
========================= */

.navbar-nav .nav-link {

    display: flex;

    align-items: center;

    gap: 8px;

    color: white !important;

    font-weight: 600;

    font-size: 14px;

    padding: 11px 16px;

    border-radius: 12px;

    transition: all .25s ease;

}


.navbar-nav .nav-link i {

    font-size: 16px;

}


.navbar-nav .nav-link:hover {

    background: rgba(255, 255, 255, .2);

}


/* =========================
   MENU AKTIF
========================= */

.navbar-nav .nav-link.active {

    background: white;

    color: #1976d2 !important;

    box-shadow: 0 4px 12px rgba(0, 0, 0, .12);

}


/* =========================
   USER INFO
========================= */

.user-info {

    display: flex;

    align-items: center;

    gap: 8px;

    background: rgba(255, 255, 255, .18);

    padding: 6px 12px;

    border-radius: 14px;

    color: white;

}


.user-icon {

    width: 35px;

    height: 35px;

    display: flex;

    align-items: center;

    justify-content: center;

    background: white;

    color: #1976d2;

    border-radius: 50%;

    flex-shrink: 0;

}


.user-icon i {

    font-size: 18px;

}


.user-text {

    display: flex;

    flex-direction: column;

    line-height: 1.1;

}


.user-text small {

    font-size: 10px;

    opacity: .9;

}


.user-text strong {

    font-size: 13px;

    font-weight: 700;

}


/* =========================
   BUTTON LOGOUT
========================= */

.btn-logout {

    display: flex;

    align-items: center;

    gap: 7px;

    background: white;

    color: #1976d2;

    border: none;

    padding: 10px 17px;

    border-radius: 12px;

    font-weight: 700;

    font-size: 14px;

    transition: all .25s ease;

}


.btn-logout:hover {

    background: #e3f2fd;

    color: #1565c0;

}


/* =========================
   MOBILE TOGGLER
========================= */

.navbar-toggler {

    border: 1.5px solid rgba(255, 255, 255, .75);

    border-radius: 10px;

    padding: 7px 10px;

    color: white;

    font-size: 18px;

}


.navbar-toggler:focus {

    box-shadow: none;

}


/* =========================
   RESPONSIVE MOBILE
========================= */

@media (max-width: 991px) {

    .navbar-collapse {

        background: rgba(0, 0, 0, .08);

        margin-top: 12px;

        padding: 12px;

        border-radius: 15px;

    }


    .nav-panel {

        background: transparent;

        padding: 0;

    }


    .navbar-nav .nav-link {

        margin-bottom: 4px;

    }


    .navbar-collapse .ms-auto {

        margin-top: 12px;

        margin-left: 0 !important;

        flex-direction: column;

        align-items: stretch !important;

    }


    .user-info,
    .btn-logout {

        width: 100%;

        justify-content: center;

    }

}

</style><?php /**PATH C:\laragon\www\PointOfSale\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>