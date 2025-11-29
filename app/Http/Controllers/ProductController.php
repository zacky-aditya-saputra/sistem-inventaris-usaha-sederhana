<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product; // <--- Ini kuncinya biar tidak error lagi
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Ambil data produk beserta nama kategorinya
        $products = Product::with('category')->get();
        
        // Kirim ke tampilan
        return view('products.index', compact('products'));
    }
}