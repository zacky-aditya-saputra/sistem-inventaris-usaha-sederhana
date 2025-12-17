<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $userId = Auth::id();

        // Hitung Produk Sendiri
        $totalProducts = Product::where('user_id', $userId)->count();

        // Hitung Kategori Sendiri
        $totalCategories = Category::where('user_id', $userId)->count();

        // Hitung Aset Sendiri
        $myProducts = Product::where('user_id', $userId)->get();
        $totalAssets = $myProducts->sum('stock') + $myProducts->sum('borrowed');
        $totalBorrowed = $myProducts->sum('borrowed') ?? 0;

        // Stok Menipis (Punya Sendiri)
        $lowStockItems = Product::where('user_id', $userId)->where('stock', '<', 5)->get();

        // Transaksi Terakhir (Punya Sendiri)
        $recentTransactions = Transaction::with('product')
            ->where('user_id', $userId)
            ->latest()
            ->take(5)
            ->get();

        return view('dashboard', compact(
            'totalProducts',
            'totalCategories',
            'totalAssets',
            'totalBorrowed',
            'lowStockItems',
            'recentTransactions'
        ));
    }
}
