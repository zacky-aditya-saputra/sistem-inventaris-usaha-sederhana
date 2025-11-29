<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// 1. Redirect Halaman Utama ke Produk
Route::get('/', function () {
    return redirect()->route('products.index');
});

// 2. Route untuk MENAMPILKAN Form Tambah Barang (PENTING: Taruh di atas route index)
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');

// 3. Route untuk MENYIMPAN Data Barang (Logika Store)
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

// 4. Route Daftar Barang (Index)
Route::get('/products', [ProductController::class, 'index'])->name('products.index');