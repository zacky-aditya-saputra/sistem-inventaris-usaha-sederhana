<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CategoryController;

// 1. Redirect Halaman Utama ke Produk
Route::get('/', function () {
    return redirect()->route('products.index');
});

Route::resource('products', ProductController::class);

Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');

Route::resource('categories', CategoryController::class);

// // 2. Route : MENAMPILKAN Form Tambah Barang
// Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// // 3. Route : MENYIMPAN Data Barang (Logika Store)
// Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// // 4. Route Daftar Barang (Index)
// Route::get('/products', [ProductController::class, 'index'])->name('products.index');