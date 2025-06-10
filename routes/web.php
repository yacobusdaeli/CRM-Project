<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Detail Produk
Route::get('/detail_produk', function () {
    return view('detail_produk');
});

// Cart
Route::get('/cart', function () {
    return view('cart-page');
})->name('cart');

// Checkout
Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

// Riwayat Beli
Route::get('/riwayat_beli', function () {
    return view('riwayat_beli');
})->name('riwayat_beli');

// Detail Riwayat Beli
Route::get('/detail_riwayat', function () {
    return view('detail_riwayat');
})->name('detail_riwayat');

// Page Notification
Route::get('/notifications', function () {
    return view('notifications');
})->name('notifications');

require __DIR__ . '/auth.php';
