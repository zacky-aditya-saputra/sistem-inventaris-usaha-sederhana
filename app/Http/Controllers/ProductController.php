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

        $categories = Category::all();

        return view('products.create', compact('categories'));
    }

    // --- 3. LOGIKA SIMPAN KE DATABASE (STORE) ---
    public function store(Request $request)
    {
        // Validasi inputan untuk kelengkapan permintaan
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

    // --- 4. TAMPILKAN FORM EDIT ---
    public function edit(Product $product)
    {
        // Ambil kategori buat dropdown
        $categories = Category::all();
        // Kirim data produk yang mau diedit ke view
        return view('products.edit', compact('product', 'categories'));
    }

    // --- 5. SIMPAN PERUBAHAN (UPDATE) ---
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'sku' => 'required', // SKU tidak perlu unique saat update diri sendiri
            'stock' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index');
    }

    // --- 6. HAPUS BARANG (DESTROY) ---
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
