<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Merchant;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/seller/pesanan', function () {
    return view('pesanan.kelola');
});

Route::get('/seller/pesanan/riwayat', function () {
    return view('pesanan.riwayat');
});

Route::get('/franchise/tambah', function () {
    return view('franchise.tambah');
});

Route::get('/form_mitra', function () {
    return view('form.form_mitra');
});

Route::get('/list_merchant', function () {
    return view('home.list_merchant');
});

Route::get('/profile', function () {
    return view('home.profile');
});

Route::get('/contact', function () {
    return view('home.contact');
});

Route::get('/about', function () {
    return view('home.about');
});

Route::get('/product_detail', function () {
    return view('productDetails.product_detail');
});

Route::get('/checkout_confirm', function () {
    return view('productDetails.checkout_confirm');
});

Route::get('/checkout', function () {
    return view('productDetails.checkout');
});

Route::get('/mitra_confirm', function () {
    return view('productDetails.mitra_confirm');
});

Route::get('/edit_profile', function () {
    return view('home.edit_profile');
});

Route::get('/syarat_ketentuan', function () {
    return view('form.syarat');
});

Route::get('/edit_bisnis', function () {
    return view('home.edit_bisnis');
});

Route::middleware('auth')->group(function () {

    Route::prefix('panel')->name('panel.')->group(function () {
        Route::get('/', [Dashboard::class, 'index'])->name('dashboard');

        Route::get('/merchants', [Merchant::class, 'index'])->name('merchants');
    });
});


require __DIR__ . '/auth.php';
