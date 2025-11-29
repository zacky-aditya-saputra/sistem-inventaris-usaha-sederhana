<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Opsi A: Redirect (Kalau buka halaman utama, lempar ke /products)
Route::get('/', function () {
    return redirect()->route('products.index');
});

// Route produk yang tadi
Route::get('/products', [ProductController::class, 'index'])->name('products.index');