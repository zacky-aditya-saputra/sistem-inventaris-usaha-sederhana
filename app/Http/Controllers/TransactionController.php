<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Product;

class TransactionController extends Controller
{
    // 1. Tampilkan Form Transaksi
    public function create()
    {
        $products = Product::all(); // Ambil semua barang buat dipilih
        return view('transactions.create', compact('products'));
    }

    // 2. Simpan Transaksi & Update Stok Otomatis
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required',
            'type' => 'required|in:in,out', // Hanya boleh 'in' atau 'out'
            'quantity' => 'required|integer|min:1',
            'transaction_date' => 'required|date',
        ]);

        // Cek dulu barangnya ada nggak?
        $product = Product::findOrFail($request->product_id);

        // LOGIKA PENTING: Cek stok cukup nggak kalau barang keluar?
        if ($request->type == 'out' && $product->stock < $request->quantity) {
            // Kalau stok kurang, balikin error
            return back()->withErrors(['quantity' => 'Stok barang tidak cukup! Stok saat ini: ' . $product->stock]);
        }

        // A. Simpan data ke tabel transactions (Riwayat)
        Transaction::create([
            'user_id' => 1, // Kita set ID 1 dulu (Admin) karena belum bikin Login
            'product_id' => $request->product_id,
            'type' => $request->type,
            'quantity' => $request->quantity,
            'transaction_date' => $request->transaction_date,
            'notes' => $request->notes
        ]);

        // B. Update stok di tabel products (Otomatis)
        if ($request->type == 'in') {
            $product->increment('stock', $request->quantity); // Tambah Stok
        } else {
            $product->decrement('stock', $request->quantity); // Kurang Stok
        }

        return redirect()->route('products.index');
    }
}
