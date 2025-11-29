<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Transaction;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // 1. Buat User Admin
        $user = User::create([
            'name' => 'Admin Gudang',
            'email' => 'admin@inventa.com',
            'password' => bcrypt('password'), // Password: password
        ]);

        // 2. Buat Kategori
        $catElektronik = Category::create([
            'name' => 'Elektronik',
            'slug' => 'elektronik'
        ]);
        
        $catPakaian = Category::create([
            'name' => 'Pakaian',
            'slug' => 'pakaian'
        ]);

        $catMakanan = Category::create([
            'name' => 'Makanan & Minuman',
            'slug' => 'makanan-minuman'
        ]);

        // 3. Buat Produk
        $laptop = Product::create([
            'category_id' => $catElektronik->id,
            'name' => 'Laptop ASUS ROG',
            'sku' => 'LAP-001',
            'stock' => 10,
            'price' => 15000000,
            'description' => 'Laptop gaming spek tinggi'
        ]);

        $kaos = Product::create([
            'category_id' => $catPakaian->id,
            'name' => 'Kaos Polos Hitam',
            'sku' => 'KAO-001',
            'stock' => 50,
            'price' => 75000,
            'description' => 'Bahan Combed 30s'
        ]);

        // 4. Buat Transaksi Awal (Stok Masuk)
        Transaction::create([
            'user_id' => $user->id,
            'product_id' => $laptop->id,
            'type' => 'in',
            'quantity' => 10,
            'total_price' => 150000000, // 10 * 15jt
            'transaction_date' => now(),
            'notes' => 'Stok awal pembukaan toko'
        ]);
    }
}