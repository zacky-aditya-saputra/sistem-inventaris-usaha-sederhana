<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // <--- JANGAN LUPA INI!

class ProductController extends Controller
{
    /**
     * Tampilkan daftar barang milik user sendiri.
     */
    public function index()
    {

        $products = Product::where('user_id', Auth::id())->with('category')->get();

        return view('products.index', compact('products'));
    }

    /**
     * Tampilkan form tambah barang.
     */
    public function create()
    {
        // Ambil kategori milik user ini saja untuk pilihan di form
        $categories = Category::where('user_id', Auth::id())->get();
        return view('products.create', compact('categories'));
    }

    /**
     * Simpan barang baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
            // Hapus validasi SKU
        ]);

        // CARA BARU (Manual agar SKU tidak ikut)
        $product = new Product();
        $product->user_id = Auth::id(); // Set Pemilik
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->description = $request->description; // Jika ada deskripsi

        // Kita TIDAK mengambil $request->sku, jadi aman!

        $product->save();

        return redirect()->route('products.index')->with('success', 'Barang berhasil ditambahkan');
    }

    /**
     * Tampilkan detail barang.
     */
    public function show(Product $product)
    {
        if ($product->user_id !== Auth::id()) abort(403);
        return view('products.show', compact('product'));
    }

    /**
     * Tampilkan form edit.
     */
    public function edit(Product $product)
    {
        if ($product->user_id !== Auth::id()) abort(403);

        $categories = Category::where('user_id', Auth::id())->get();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update barang yang sudah ada.
     */
    public function update(Request $request, Product $product)
    {
        if ($product->user_id !== Auth::id()) abort(403);

        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
        ]);

        // Update Manual juga
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->stock = $request->stock;
        $product->price = $request->price;
        $product->description = $request->description;

        // SKU tidak di-update

        $product->save();

        return redirect()->route('products.index')->with('success', 'Barang berhasil diperbarui');
    }

    /**
     * Hapus barang.
     */
    public function destroy(Product $product)
    {
        if ($product->user_id !== Auth::id()) abort(403);

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Barang berhasil dihapus');
    }
}
