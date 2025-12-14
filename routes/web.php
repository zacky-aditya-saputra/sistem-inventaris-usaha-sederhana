<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\CategoryController;

// 1. Redirect Halaman Utama ke Produk
Route::get('/', function () {
    return redirect()->route('products.index');
});
// Route untuk melihat tabel riwayat
Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');

Route::resource('products', ProductController::class);

Route::get('/transactions/create', [TransactionController::class, 'create'])->name('transactions.create');
Route::post('/transactions', [TransactionController::class, 'store'])->name('transactions.store');


Route::resource('categories', CategoryController::class);