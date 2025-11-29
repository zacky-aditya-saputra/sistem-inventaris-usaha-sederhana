<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// LIHAT DISINI: Semua 'use' kumpul di paling atas, bukan di tengah
use App\Models\Product;
use App\Models\Category; 

class ProductController extends Controller
{
    // --- 1. HALAMAN DAFTAR BARANG (INDEX) ---
    public function index()
    {
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    // --- 2. HALAMAN FORM TAMBAH BARANG (CREATE) ---
    public function create()
    {
        // Karena 'use App\Models\Category' sudah ada di paling atas,
        // di sini kita tinggal panggil saja, tidak perlu 'use' lagi.
        $categories = Category::all();
        
        return view('products.create', compact('categories'));
    }

    // --- 3. LOGIKA SIMPAN KE DATABASE (STORE) ---
    public function store(Request $request)
    {
        // Validasi inputan
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'sku' => 'required|unique:products',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        // Simpan data
        Product::create($request->all());

        // Balik ke halaman utama
        return redirect()->route('products.index');
    }
}