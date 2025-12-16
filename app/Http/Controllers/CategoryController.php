<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str; // <-- Import ini untuk bikin slug otomatis
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    // 1. Tampilkan Daftar Kategori
    public function index()
    {

        $categories = Category::where('user_id', Auth::id())->get();
        
        return view('categories.index', compact('categories'));
    }

    // 2. Form Tambah Kategori
    public function create()
    {
        return view('categories.create');
    }

    // 3. Simpan Kategori Baru
    public function store(Request $request)
    {
        // 1. Validasi Input
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // 2. Simpan Data (Cara Manual agar Aman)
        $category = new Category();
        $category->name = $request->name;
        $category->user_id = Auth::id(); // <--- Penting: Set pemilik data
        
        // JANGAN ADA BARIS SEPERTI INI:
        // $category->slug = Str::slug($request->name); 
        
        $category->save();

        // 3. Kembali ke halaman list
        return redirect()->route('categories.index')->with('success', 'Kategori berhasil ditambahkan');
    }

    // 4. Form Edit Kategori
    public function edit(Category $category)
    {
        return view('categories.edit', compact('category'));
    }

    // 5. Update Kategori
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories,name,' . $category->id,
        ]);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ]);

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil diupdate!');
    }

    // 6. Hapus Kategori
    public function destroy(Category $category)
    {
        // Hati-hati: Karena kita pakai onDelete('cascade') di database,
        // menghapus kategori akan menghapus SEMUA PRODUK di dalamnya.
        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Kategori dihapus!');
    }
}