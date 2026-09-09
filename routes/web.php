<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;


/*
|--------------------------------------------------------------------------
| REDIRECT
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    if (Auth::check()) {
        return redirect()->route('dashboard');
    }

    return redirect()->route('login');

});


/*
|--------------------------------------------------------------------------
| GUEST
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Login
    |--------------------------------------------------------------------------
    */

    Route::get('/login', [
        AuthController::class,
        'index'
    ])->name('login');


    /*
    |--------------------------------------------------------------------------
    | Proses Login
    |--------------------------------------------------------------------------
    */

    Route::post('/auth', [
        AuthController::class,
        'auth'
    ])->name('auth');

});


/*
|--------------------------------------------------------------------------
| AUTHENTICATED
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {


    /*
    |--------------------------------------------------------------------------
    | DASHBOARD
    |--------------------------------------------------------------------------
    */

    Route::get('/dashboard', [
        DashboardController::class,
        'index'
    ])->name('dashboard');


    /*
    |--------------------------------------------------------------------------
    | TENTANG
    |--------------------------------------------------------------------------
    | Admin dan Kasir bisa mengakses halaman Tentang
    |--------------------------------------------------------------------------
    */

    Route::get('/tentang', function () {

        return view('tentang');

    })->name('tentang');


    /*
    |--------------------------------------------------------------------------
    | ADMIN ONLY
    |--------------------------------------------------------------------------
    */

    Route::middleware('role:admin')->group(function () {


        /*
        |--------------------------------------------------------------------------
        | USERS
        |--------------------------------------------------------------------------
        */

        Route::resource(
            'users',
            UserController::class
        );


        /*
        |--------------------------------------------------------------------------
        | JENIS PRODUK
        |--------------------------------------------------------------------------
        */

        Route::resource(
            'jenis-produk',
            JenisProdukController::class
        )->except([
            'show'
        ]);

    });


    /*
    |--------------------------------------------------------------------------
    | ADMIN & KASIR
    |--------------------------------------------------------------------------
    */

    Route::middleware('role:admin,kasir')->group(function () {


        /*
        |--------------------------------------------------------------------------
        | PRODUK
        |--------------------------------------------------------------------------
        */

        Route::resource(
            'produk',
            ProdukController::class
        )->except([
            'show'
        ]);


        /*
        |--------------------------------------------------------------------------
        | PENJUALAN
        |--------------------------------------------------------------------------
        */

        /*
        | Halaman utama penjualan
        */
        Route::get(
            '/penjualan',
            [PenjualanController::class, 'index']
        )->name('penjualan.index');


        /*
        | Tambah transaksi
        */
        Route::get(
            '/penjualan/create',
            [PenjualanController::class, 'create']
        )->name('penjualan.create');


        /*
        | Simpan transaksi
        */
        Route::post(
            '/penjualan',
            [PenjualanController::class, 'store']
        )->name('penjualan.store');


        /*
        | Checkout
        */
        Route::post(
            '/penjualan/checkout',
            [PenjualanController::class, 'checkout']
        )->name('penjualan.checkout');


        /*
        | Cancel transaksi
        */
        Route::post(
            '/penjualan/cancel',
            [PenjualanController::class, 'cancel']
        )->name('penjualan.cancel');


        /*
        | Hapus item penjualan
        */
        Route::delete(
            '/penjualan/item/{id}',
            [PenjualanController::class, 'destroyItem']
        )->name('penjualan.destroyItem');


        /*
        | Edit transaksi
        */
        Route::get(
            '/penjualan/{penjualan}/edit',
            [PenjualanController::class, 'edit']
        )->name('penjualan.edit');


        /*
        | Update transaksi
        */
        Route::put(
            '/penjualan/{penjualan}',
            [PenjualanController::class, 'update']
        )->name('penjualan.update');


        /*
        | Hapus transaksi
        */
        Route::delete(
            '/penjualan/{penjualan}',
            [PenjualanController::class, 'destroy']
        )->name('penjualan.destroy');


        /*
        | Detail transaksi
        */
        Route::get(
            '/penjualan/{penjualan}',
            [PenjualanController::class, 'show']
        )->name('penjualan.show');

    });


    /*
    |--------------------------------------------------------------------------
    | LOGOUT
    |--------------------------------------------------------------------------
    */

    Route::post('/logout', [
        AuthController::class,
        'logout'
    ])->name('logout');

});