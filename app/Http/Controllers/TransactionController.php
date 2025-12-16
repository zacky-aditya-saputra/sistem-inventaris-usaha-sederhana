<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{

    // --- HALAMAN RIWAYAT TRANSAKSI ---
    public function index()
    {
        // SEBELUMNYA: $transactions = Transaction::with('product')->latest()->get();
        
        // SESUDAHNYA:
        $transactions = Transaction::with('product')
                        ->where('user_id', Auth::id()) // <--- Filter User
                        ->latest()
                        ->get();

        return view('transactions.index', compact('transactions'));
    }
    // Tampilkan Form Transaksi
    public function create()
    {
        $products = Product::all(); // Ambil semua barang buat dipilih
        return view('transactions.create', compact('products'));
    }

    // Simpan Transaksi & Update Stok Otomatis
    public function store(Request $request)
    {
        // Cek produk
        $product = Product::findOrFail($request->product_id);

        // --- VALIDASI STOK ---
        // Jika mau pinjam, pastikan stok di gudang ada
        if ($request->type == 'loan' && $product->stock < $request->quantity) {
            return back()->withErrors(['quantity' => 'Stok di gudang tidak cukup untuk dipinjam!']);
        }
        // Jika mau kembali, pastikan memang ada yang sedang dipinjam
        if ($request->type == 'return' && $product->borrowed < $request->quantity) {
            return back()->withErrors(['quantity' => 'Jumlah pengembalian melebihi data barang yang dipinjam!']);
        }

        // --- SIMPAN TRANSAKSI ---
        Transaction::create([
            'user_id' => 1,
            'product_id' => $request->product_id,
            'type' => $request->type, // loan, return, restock, sold
            'quantity' => $request->quantity,
            'recipient' => $request->recipient,
            'location' => $request->location,
            'transaction_date' => $request->transaction_date,
            'notes' => $request->notes
        ]);

        // --- UPDATE STOK (LOGIKA PINDAH) ---
        if ($request->type == 'loan') {
            // PINJAM: Pindah dari Gudang ke Kolom Borrowed
            $product->decrement('stock', $request->quantity);    // Gudang Berkurang
            $product->increment('borrowed', $request->quantity); // Angka "Dipinjam" Bertambah
            // TOTAL ASET TETAP SAMA
        } elseif ($request->type == 'return') {
            // KEMBALI: Pindah dari Kolom Borrowed ke Gudang
            $product->increment('stock', $request->quantity);    // Gudang Bertambah
            $product->decrement('borrowed', $request->quantity); // Angka "Dipinjam" Berkurang
        } elseif ($request->type == 'restock') {
            // BELI BARU: Aset Bertambah Murni
            $product->increment('stock', $request->quantity);
        } elseif ($request->type == 'sold') {
            // RUSAK/HILANG: Aset Berkurang Murni
            $product->decrement('stock', $request->quantity);
        }

        return redirect()->route('products.index');
    }
}
