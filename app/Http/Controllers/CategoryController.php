<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str; // <-- Import ini untuk bikin slug otomatis

class CategoryController extends Controller
{
    // 1. Tampilkan Daftar Kategori
    public function index()
    {
        $categories = Category::all();
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
        $request->validate([
            'name' => 'required|unique:categories,name', // Nama tidak boleh kembar
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name) // 'Alat Tulis' -> 'alat-tulis'
        ]);

        return redirect()->route('categories.index')->with('success', 'Kategori berhasil dibuat!');
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