<?php

use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Home;
use App\Http\Controllers\Merchant;
use App\Http\Controllers\Form;
use App\Http\Controllers\Product;
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

Route::get('/seller/pesanan', function () {
    return view('pesanan.kelola');
});

Route::get('/seller/pesanan/riwayat', function () {
    return view('pesanan.riwayat');
});

Route::get('/franchise/tambah', function () {
    return view('franchise.tambah');
});

Route::middleware('auth')->group(function () {

    Route::prefix('panel')->name('panel.')->group(function () {
        Route::get('/', [Dashboard::class, 'index'])->name('dashboard');
        Route::get('/merchants', [Merchant::class, 'index'])->name('merchants');
    });
});

Route::prefix('form')->group(function () {
        Route::get('/daftar-mitra', [Form::class, 'index'])->name('daftar-mitra');
        Route::get('/mitra-confirm', [Form::class, 'confirm'])->name('mitra-confirm');
        Route::get('/syarat-ketentuan', [Form::class, 'syarat'])->name('syarat-ketentuan');

        
});

Route::prefix('home')->group(function(){

    Route::get('/', [Home::class, 'index'])->name('home');
    Route::get('/contact', [Home::class, 'contact'])->name('contact');
    Route::get('/about', [Home::class, 'about'])->name('about');
    Route::get('/profile', [Home::class, 'profile'])->name('profile');
    Route::get('/edit-profile', [Home::class, 'edit'])->name('edit-profile');
    Route::get('/edit-bisnis', [Home::class, 'editBisnis'])->name('edit-bisnis');
    Route::get('/list-merchant', [Home::class, 'listMerchant'])->name('list-merchant');
    
});

Route::prefix('product')->group(function(){

    Route::get('/', [Product::class, 'index'])->name('product');
    Route::get('/checkout', [Product::class, 'checkout'])->name('checkout');
    Route::get('/confirm', [Product::class, 'confirm'])->name('checkout-confirm');
    
});





require __DIR__ . '/auth.php';
