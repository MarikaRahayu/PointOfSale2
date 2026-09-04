

<?php $__env->startSection('title', 'Tentang Marika Mart'); ?>

<?php $__env->startSection('content'); ?>

<style>

/* =========================================================
   MARIKA MART - TENTANG TOKO
========================================================= */

:root {
    --blue-main: #5BBCE4;
    --blue: #247BA0;
    --blue-dark: #155E75;
    --blue-light: #EAF8FD;
    --blue-soft: #F5FCFF;
    --blue-border: #C7EAF7;
    --dark: #183B4A;
    --text: #55727D;
    --muted: #7B959E;
    --white: #FFFFFF;
}

/* =========================================================
   WRAPPER
========================================================= */

.tentang-wrapper {
    min-height: calc(100vh - 80px);
    padding: 25px 15px 40px;

    background:
        radial-gradient(
            circle at 0% 0%,
            rgba(91,188,228,.14),
            transparent 28%
        ),
        radial-gradient(
            circle at 100% 10%,
            rgba(137,207,240,.12),
            transparent 25%
        ),
        linear-gradient(
            135deg,
            #F8FDFF,
            #EAF8FD 50%,
            #FFFFFF
        );
}

.tentang-container {
    max-width: 1100px;
    margin: auto;
}

/* =========================================================
   HERO
========================================================= */

.store-hero {
    position: relative;
    overflow: hidden;

    padding: 28px;

    border-radius: 22px;

    background: linear-gradient(
        135deg,
        #FFFFFF,
        #F0FAFE
    );

    border: 1px solid var(--blue-border);

    box-shadow:
        0 12px 30px rgba(36,123,160,.09);

    margin-bottom: 18px;

    animation: fadeUp .5s ease;
}

.store-hero::before {
    content: "";

    position: absolute;

    width: 220px;
    height: 220px;

    border-radius: 50%;

    background: rgba(91,188,228,.08);

    right: -80px;
    top: -110px;
}

.store-hero::after {
    content: "";

    position: absolute;

    width: 130px;
    height: 130px;

    border-radius: 50%;

    background: rgba(137,207,240,.08);

    left: -60px;
    bottom: -70px;
}

.hero-content {
    position: relative;
    z-index: 2;
}

/* =========================================================
   LABEL
========================================================= */

.store-label {
    display: inline-flex;
    align-items: center;

    gap: 5px;

    padding: 6px 12px;

    background: var(--blue-light);

    color: var(--blue);

    border: 1px solid var(--blue-border);

    border-radius: 50px;

    font-size: 10px;
    font-weight: 700;

    letter-spacing: .4px;

    margin-bottom: 10px;
}

/* =========================================================
   TITLE
========================================================= */

.store-title {
    color: var(--dark);

    font-size: 36px;
    font-weight: 800;

    margin: 0 0 8px;

    letter-spacing: -.3px;
}

.store-title span {
    color: var(--blue);
}

/* =========================================================
   DESCRIPTION
========================================================= */

.store-description {
    max-width: 620px;

    color: var(--text);

    font-size: 13px;
    line-height: 1.7;

    margin: 0;
}

.store-description strong {
    color: var(--blue);
}

/* =========================================================
   FOTO TOKO
========================================================= */

.store-photo-wrapper {
    position: relative;

    display: flex;
    align-items: center;
    justify-content: center;

    z-index: 2;
}

.store-photo {
    width: 100%;
    max-width: 300px;

    height: 230px;

    object-fit: cover;

    border-radius: 18px;

    border: 5px solid #FFFFFF;

    box-shadow:
        0 10px 25px rgba(36,123,160,.16);

    transition: .3s ease;
}

.store-photo:hover {
    transform: scale(1.02);
}

/* =========================================================
   SECTION CARD
========================================================= */

.section-card {
    position: relative;

    background: rgba(255,255,255,.97);

    border: 1px solid var(--blue-border);

    border-radius: 19px;

    padding: 22px;

    margin-bottom: 18px;

    box-shadow:
        0 8px 22px rgba(36,123,160,.06);

    animation: fadeUp .5s ease;
}

/* =========================================================
   SECTION HEADER
========================================================= */

.section-header {
    display: flex;
    align-items: center;

    gap: 10px;

    margin-bottom: 16px;
}

.section-icon {
    width: 40px;
    height: 40px;

    min-width: 40px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 11px;

    background: linear-gradient(
        135deg,
        #EAF8FD,
        #DDF4FC
    );

    font-size: 18px;
}

.section-title {
    color: var(--dark);

    font-size: 19px;
    font-weight: 800;

    margin: 0;
}

.section-subtitle {
    color: var(--muted);

    font-size: 10px;

    margin: 2px 0 0;
}

/* =========================================================
   TEXT
========================================================= */

.about-text {
    color: var(--text);

    font-size: 12px;
    line-height: 1.7;

    margin-bottom: 10px;
}

.about-text:last-child {
    margin-bottom: 0;
}

.about-text strong {
    color: var(--blue);
}

/* =========================================================
   DETAIL TABLE
========================================================= */

.detail-table {
    width: 100%;

    border-collapse: separate;
    border-spacing: 0;

    overflow: hidden;

    border: 1px solid var(--blue-border);

    border-radius: 12px;
}

.detail-table th {
    width: 30%;

    padding: 10px 13px;

    color: var(--blue);

    background: #F0FAFE;

    font-size: 11px;

    text-align: left;

    border-bottom: 1px solid #E2F4FA;
}

.detail-table td {
    padding: 10px 13px;

    color: var(--text);

    background: white;

    font-size: 11px;

    line-height: 1.5;

    border-bottom: 1px solid #EAF7FC;
}

.detail-table tr:last-child th,
.detail-table tr:last-child td {
    border-bottom: none;
}

.detail-table tr:hover th,
.detail-table tr:hover td {
    background: #F8FDFF;
}

/* =========================================================
   CATEGORY
========================================================= */

.category-card {
    height: 100%;

    padding: 17px;

    border-radius: 14px;

    background: linear-gradient(
        135deg,
        #FFFFFF,
        #F3FBFE
    );

    border: 1px solid var(--blue-border);

    transition: .25s ease;
}

.category-card:hover {
    transform: translateY(-3px);

    box-shadow:
        0 8px 18px rgba(36,123,160,.09);
}

.category-icon {
    width: 43px;
    height: 43px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 12px;

    background: var(--blue-light);

    font-size: 20px;

    margin-bottom: 10px;
}

.category-title {
    color: var(--blue);

    font-size: 14px;
    font-weight: 800;

    margin-bottom: 5px;
}

.category-text {
    color: var(--text);

    font-size: 11px;
    line-height: 1.6;

    margin: 0;
}

/* =========================================================
   FITUR PENJUALAN
========================================================= */

.feature-card {
    height: 100%;

    padding: 15px;

    border-radius: 13px;

    border: 1px solid var(--blue-border);

    background: white;

    transition: .25s ease;
}

.feature-card:hover {
    transform: translateY(-3px);

    box-shadow:
        0 8px 18px rgba(36,123,160,.08);
}

.feature-number {
    width: 30px;
    height: 30px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 8px;

    background: var(--blue-light);

    color: var(--blue);

    font-weight: 800;
    font-size: 10px;

    margin-bottom: 9px;
}

.feature-title {
    color: var(--dark);

    font-size: 13px;
    font-weight: 800;

    margin-bottom: 5px;
}

.feature-text {
    color: var(--text);

    font-size: 10px;
    line-height: 1.6;

    margin: 0;
}

/* =========================================================
   OWNER
========================================================= */

.owner-box {
    padding: 22px;

    border-radius: 17px;

    background: linear-gradient(
        135deg,
        #F4FBFE,
        #EAF8FD
    );

    border: 1px solid var(--blue-border);
}

.owner-photo {
    width: 130px;
    height: 130px;

    object-fit: cover;

    border-radius: 50%;

    border: 5px solid white;

    box-shadow:
        0 8px 20px rgba(36,123,160,.14);

    transition: .3s ease;
}

.owner-photo:hover {
    transform: scale(1.03);
}

.owner-name {
    color: var(--dark);

    font-size: 20px;
    font-weight: 800;

    margin-top: 10px;
    margin-bottom: 3px;
}

.owner-role {
    color: var(--blue);

    font-size: 11px;
    font-weight: 700;

    margin-bottom: 10px;
}

/* =========================================================
   CONTACT GRID
========================================================= */

.contact-grid {
    display: grid;

    grid-template-columns: repeat(2, 1fr);

    gap: 10px;
}

/* =========================================================
   CONTACT LINK
========================================================= */

.contact-link {
    position: relative;

    display: flex;
    align-items: center;

    gap: 11px;

    width: 100%;
    min-height: 65px;

    padding: 12px;

    background: #FFFFFF;

    border: 1px solid var(--blue-border);

    border-radius: 13px;

    text-decoration: none !important;

    color: inherit !important;

    cursor: pointer;

    z-index: 10;

    box-sizing: border-box;

    transition: .25s ease;
}

.contact-link:hover {
    transform: translateY(-2px);

    box-shadow:
        0 7px 16px rgba(36,123,160,.10);

    border-color: var(--blue-main);
}

.contact-link:active {
    transform: scale(.99);
}

.contact-link:focus {
    outline: 2px solid rgba(91,188,228,.30);

    outline-offset: 2px;
}

.contact-link * {
    pointer-events: none;
}

/* =========================================================
   CONTACT ICON
========================================================= */

.contact-icon {
    width: 38px;
    height: 38px;

    min-width: 38px;

    display: flex;
    align-items: center;
    justify-content: center;

    background: linear-gradient(
        135deg,
        #EAF8FD,
        #DDF4FC
    );

    border-radius: 10px;

    font-size: 17px;
}

/* =========================================================
   CONTACT LABEL
========================================================= */

.contact-label {
    display: block;

    color: var(--muted);

    font-size: 9px;

    margin-bottom: 2px;
}

/* =========================================================
   CONTACT VALUE
========================================================= */

.contact-value {
    display: inline-block;

    color: var(--blue);

    font-size: 11px;

    font-weight: 800;

    text-decoration: none !important;

    word-break: break-word;
}

.contact-link:hover .contact-value {
    color: var(--blue-main);

    text-decoration: underline !important;
}

/* =========================================================
   JAM OPERASIONAL
========================================================= */

.operational-box {
    margin-top: 12px;

    padding: 13px 15px;

    display: flex;
    align-items: center;

    gap: 11px;

    background: linear-gradient(
        135deg,
        #EAF8FD,
        #F5FCFF
    );

    border: 1px solid var(--blue-border);

    border-radius: 13px;

    transition: .25s ease;
}

.operational-box:hover {
    transform: translateY(-2px);

    box-shadow:
        0 6px 15px rgba(36,123,160,.07);
}

.operational-icon {
    width: 38px;
    height: 38px;

    min-width: 38px;

    display: flex;
    align-items: center;
    justify-content: center;

    border-radius: 10px;

    background: #FFFFFF;

    border: 1px solid var(--blue-border);

    font-size: 17px;
}

.operational-title {
    color: var(--blue);

    font-size: 9px;

    font-weight: 700;

    margin-bottom: 2px;
}

.operational-time {
    color: var(--dark);

    font-size: 12px;

    font-weight: 800;
}

/* =========================================================
   FOOTER
========================================================= */

.store-footer {
    text-align: center;

    padding: 20px 15px;

    border-radius: 17px;

    background: linear-gradient(
        135deg,
        #EAF8FD,
        #F6FCFF
    );

    border: 1px solid var(--blue-border);

    color: var(--text);

    font-size: 10px;

    line-height: 1.7;
}

.store-footer strong {
    color: var(--blue);
}

/* =========================================================
   ANIMATION
========================================================= */

@keyframes fadeUp {

    from {
        opacity: 0;
        transform: translateY(12px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }

}

/* =========================================================
   RESPONSIVE
========================================================= */

@media (max-width: 768px) {

    .tentang-wrapper {
        padding: 20px 10px 30px;
    }

    .store-hero {
        padding: 22px 18px;
    }

    .store-title {
        font-size: 30px;
    }

    .store-description {
        font-size: 12px;
    }

    .store-photo {
        max-width: 260px;
        height: 200px;
        margin-top: 20px;
    }

    .section-card {
        padding: 18px 14px;
    }

    .contact-grid {
        grid-template-columns: 1fr;
    }

    .owner-box {
        padding: 18px 12px;
    }

    .owner-photo {
        width: 115px;
        height: 115px;
    }

    .detail-table th,
    .detail-table td {
        padding: 9px;
        font-size: 10px;
    }
}

@media (max-width: 480px) {

    .store-title {
        font-size: 27px;
    }

    .store-photo {
        height: 180px;
    }

    .section-title {
        font-size: 17px;
    }

    .contact-value {
        font-size: 10px;
    }

}

</style>


<div class="tentang-wrapper">

    <div class="tentang-container">

        

        <div class="store-hero">

            <div class="row align-items-center">

                <div class="col-md-7">

                    <div class="hero-content">

                        <div class="store-label">
                            🛒 TOKO RETAIL & KEBUTUHAN SEHARI-HARI
                        </div>

                        <h1 class="store-title">
                            Marika <span>Mart</span>
                        </h1>

                        <p class="store-description">

                            Selamat datang di
                            <strong>Marika Mart</strong>,
                            toko retail yang menyediakan berbagai
                            kebutuhan sehari-hari seperti makanan,
                            minuman, snack, sembako, kebutuhan rumah
                            tangga dan produk pilihan lainnya.

                            <br><br>

                            Marika Mart hadir untuk memberikan
                            pengalaman belanja yang praktis,
                            mudah dan nyaman.

                        </p>

                    </div>

                </div>

                <div class="col-md-5">

                    <div class="store-photo-wrapper">

                        <img
                            src="<?php echo e(asset('images/p.jpg')); ?>"
                            alt="Foto Marika Mart"
                            class="store-photo"
                        >

                    </div>

                </div>

            </div>

        </div>


        

        <div class="section-card">

            <div class="section-header">

                <div class="section-icon">
                    🏪
                </div>

                <div>

                    <h2 class="section-title">
                        Tentang Marika Mart
                    </h2>

                    <p class="section-subtitle">
                        Toko retail kebutuhan sehari-hari
                    </p>

                </div>

            </div>

            <p class="about-text">

                <strong>Marika Mart</strong> merupakan toko retail
                yang menyediakan berbagai kebutuhan sehari-hari
                untuk masyarakat.

            </p>

            <p class="about-text">

                Pelanggan dapat menemukan
                <strong>
                    makanan, minuman, snack, sembako,
                    kebutuhan rumah tangga dan produk kebersihan
                </strong>
                dalam satu tempat.

            </p>

            <p class="about-text">

                Marika Mart menggunakan
                <strong>sistem penjualan digital</strong>
                untuk membantu pengelolaan produk, stok,
                transaksi dan laporan penjualan.

            </p>

        </div>


        

        <div class="section-card">

            <div class="section-header">

                <div class="section-icon">
                    📋
                </div>

                <div>

                    <h2 class="section-title">
                        Detail Toko
                    </h2>

                    <p class="section-subtitle">
                        Informasi Marika Mart
                    </p>

                </div>

            </div>

            <table class="detail-table">

                <tbody>

                    <tr>
                        <th>Nama Toko</th>
                        <td>Marika Mart</td>
                    </tr>

                    <tr>
                        <th>Jenis Usaha</th>
                        <td>Minimarket / Retail</td>
                    </tr>

                    <tr>
                        <th>Konsep Toko</th>
                        <td>Toko kebutuhan sehari-hari</td>
                    </tr>

                    <tr>
                        <th>Produk</th>
                        <td>
                            Makanan, minuman, snack, sembako,
                            kebutuhan rumah tangga dan produk harian
                        </td>
                    </tr>

                    <tr>
                        <th>Sistem Penjualan</th>
                        <td>Sistem penjualan digital</td>
                    </tr>

                    <tr>
                        <th>Pembayaran</th>
                        <td>Tunai dan Non-Tunai</td>
                    </tr>

                    <tr>
                        <th>Pengelolaan Stok</th>
                        <td>Sistem digital</td>
                    </tr>

                    <tr>
                        <th>Lokasi</th>
                        <td>Tasikmalaya, Jawa Barat</td>
                    </tr>

                    <tr>
                        <th>Pelayanan</th>
                        <td>Ramah, cepat dan nyaman</td>
                    </tr>

                </tbody>

            </table>

        </div>


        

        <div class="section-card">

            <div class="section-header">

                <div class="section-icon">
                    🛒
                </div>

                <div>

                    <h2 class="section-title">
                        Kategori Produk
                    </h2>

                    <p class="section-subtitle">
                        Produk yang tersedia
                    </p>

                </div>

            </div>

            <div class="row g-3">

                <div class="col-md-4 col-sm-6">
                    <div class="category-card">

                        <div class="category-icon">🍜</div>

                        <div class="category-title">
                            Makanan
                        </div>

                        <p class="category-text">
                            Mie instan, roti, biskuit dan
                            berbagai produk makanan lainnya.
                        </p>

                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="category-card">

                        <div class="category-icon">🍿</div>

                        <div class="category-title">
                            Snack
                        </div>

                        <p class="category-text">
                            Keripik, wafer, cokelat, permen
                            dan makanan ringan.
                        </p>

                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="category-card">

                        <div class="category-icon">🥤</div>

                        <div class="category-title">
                            Minuman
                        </div>

                        <p class="category-text">
                            Air mineral, teh, kopi, susu,
                            jus dan minuman kemasan.
                        </p>

                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="category-card">

                        <div class="category-icon">🛍️</div>

                        <div class="category-title">
                            Sembako
                        </div>

                        <p class="category-text">
                            Beras, gula, minyak goreng,
                            tepung, telur dan kebutuhan pokok.
                        </p>

                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="category-card">

                        <div class="category-icon">🏠</div>

                        <div class="category-title">
                            Kebutuhan Rumah
                        </div>

                        <p class="category-text">
                            Berbagai kebutuhan rumah tangga
                            untuk aktivitas sehari-hari.
                        </p>

                    </div>
                </div>


                <div class="col-md-4 col-sm-6">
                    <div class="category-card">

                        <div class="category-icon">🧼</div>

                        <div class="category-title">
                            Produk Kebersihan
                        </div>

                        <p class="category-text">
                            Sabun, sampo, deterjen, pasta gigi
                            dan kebutuhan kebersihan lainnya.
                        </p>

                    </div>
                </div>

            </div>

        </div>


        

        <div class="section-card">

            <div class="section-header">

                <div class="section-icon">
                    💳
                </div>

                <div>

                    <h2 class="section-title">
                        Detail Penjualan Toko
                    </h2>

                    <p class="section-subtitle">
                        Alur transaksi Marika Mart
                    </p>

                </div>

            </div>

            <div class="row g-3">

                <div class="col-md-4">

                    <div class="feature-card">

                        <div class="feature-number">01</div>

                        <div class="feature-title">
                            Pilih Produk
                        </div>

                        <p class="feature-text">
                            Kasir memilih produk yang dibeli
                            pelanggan.
                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="feature-card">

                        <div class="feature-number">02</div>

                        <div class="feature-title">
                            Cek Stok
                        </div>

                        <p class="feature-text">
                            Sistem membantu mengecek
                            ketersediaan stok produk.
                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="feature-card">

                        <div class="feature-number">03</div>

                        <div class="feature-title">
                            Tentukan Jumlah
                        </div>

                        <p class="feature-text">
                            Jumlah barang dimasukkan
                            ke transaksi.
                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="feature-card">

                        <div class="feature-number">04</div>

                        <div class="feature-title">
                            Hitung Total
                        </div>

                        <p class="feature-text">
                            Sistem menghitung total harga
                            pembelian.
                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="feature-card">

                        <div class="feature-number">05</div>

                        <div class="feature-title">
                            Pembayaran
                        </div>

                        <p class="feature-text">
                            Pelanggan melakukan pembayaran
                            sesuai total transaksi.
                        </p>

                    </div>

                </div>


                <div class="col-md-4">

                    <div class="feature-card">

                        <div class="feature-number">06</div>

                        <div class="feature-title">
                            Transaksi Tersimpan
                        </div>

                        <p class="feature-text">
                            Transaksi selesai tersimpan
                            sebagai data penjualan.
                        </p>

                    </div>

                </div>

            </div>

        </div>


        

        <div class="section-card">

            <div class="section-header">

                <div class="section-icon">
                    👤
                </div>

                <div>

                    <h2 class="section-title">
                        Profil Owner
                    </h2>

                    <p class="section-subtitle">
                        Pemilik Marika Mart
                    </p>

                </div>

            </div>

            <div class="owner-box">

                <div class="row align-items-center">

                    <div class="col-md-4 text-center mb-4 mb-md-0">

                        <img
                            src="<?php echo e(asset('images/p.jpeg')); ?>"
                            alt="Marika Rahayu"
                            class="owner-photo"
                        >

                        <h3 class="owner-name">
                            Marika Rahayu
                        </h3>

                        <div class="owner-role">
                            Owner
                        </div>

                    </div>


                    <div class="col-md-8">

                        <p class="about-text">

                            <strong>Marika Rahayu</strong>
                            merupakan owner dan pembuat sistem
                            penjualan digital Marika Mart.

                        </p>

                        <p class="about-text">

                            Sistem ini membantu pengelolaan produk,
                            stok, kategori, transaksi, pembayaran
                            dan laporan penjualan.

                        </p>

                        <table class="detail-table">

                            <tbody>

                                <tr>
                                    <th>Nama</th>
                                    <td>Marika Rahayu</td>
                                </tr>

                                <tr>
                                    <th>Jabatan</th>
                                    <td>Owner Marika Mart</td>
                                </tr>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>


        

        <div class="section-card">

            <div class="section-header">

                <div class="section-icon">
                    📞
                </div>

                <div>

                    <h2 class="section-title">
                        Informasi Kontak
                    </h2>

                    <p class="section-subtitle">
                        Hubungi Owner
                    </p>

                </div>

            </div>


            <div class="contact-grid">


                

                <a
                    href="https://maps.app.goo.gl/Mh71mZETSEFWgAoT7"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="contact-link"
                    aria-label="Buka lokasi Marika Mart"
                >

                    <div class="contact-icon">
                        📍
                    </div>

                    <div>

                        <span class="contact-label">
                            Alamat Toko
                        </span>

                        <span class="contact-value">
                            Jl.padasuka nagrak,Jawa Barat
                        </span>

                    </div>

                </a>


                

                <a
                    href="tel:089507959279"
                    class="contact-link"
                    aria-label="Telepon Marika Mart"
                >

                    <div class="contact-icon">
                        📱
                    </div>

                    <div>

                        <span class="contact-label">
                            Nomor Telepon
                        </span>

                        <span class="contact-value">
                            089507959279
                        </span>

                    </div>

                </a>


                

                <a
                    href="mailto:MarikaRahayu2@gmail.com"
                    class="contact-link"
                    aria-label="Kirim email ke Marika Mart"
                >

                    <div class="contact-icon">
                        ✉️
                    </div>

                    <div>

                        <span class="contact-label">
                            Email
                        </span>

                        <span class="contact-value">
                            MarikaRahayu2@gmail.com
                        </span>

                    </div>

                </a>


                

                <a
                    href="https://www.instagram.com/ikaachuuuuuu/"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="contact-link"
                    aria-label="Buka Instagram Marika Rahayu"
                >

                    <div class="contact-icon">
                        📸
                    </div>

                    <div>

                        <span class="contact-label">
                            Instagram
                        </span>

                        <span class="contact-value">
                            Ikaaachuuuuuuu
                        </span>

                    </div>

                </a>

            </div>


            

            <div class="operational-box">

                <div class="operational-icon">
                    🕐
                </div>

                <div>

                    <div class="operational-title">
                        Jam Operasional Marika Mart
                    </div>

                    <div class="operational-time">
                        Senin - Minggu
                        &nbsp;•&nbsp;
                        08.00 - 21.00 WIB
                    </div>

                </div>

            </div>

        </div>


        

        <div class="store-footer">

            <strong>
                🛒 Marika Mart
            </strong>

            <br>

            Toko retail kebutuhan sehari-hari.

            <br>

            Sistem penjualan digital untuk membantu
            pengelolaan produk, stok dan transaksi.

            <br><br>

            Dibuat dan dikelola oleh
            <strong>Marika Rahayu</strong>

            <br>

            © <?php echo e(date('Y')); ?> Marika Mart. All Rights Reserved.

        </div>

    </div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\PointOfSale2\resources\views/tentang.blade.php ENDPATH**/ ?>