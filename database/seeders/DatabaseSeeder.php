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
        // ... kode atas tetap sama ...

        // 2. Buat Kategori (INI YANG DIUBAH)
        
        // A. Elektronik (Tetap)
        $catElektronik = Category::create([
            'name' => 'Elektronik',
            'slug' => 'elektronik'
        ]);
        
        // B. Pakaian -> Ganti jadi MEBEL
        $catMebel = Category::create([
            'name' => 'Mebel',
            'slug' => 'mebel'
        ]);

        // C. Makanan -> Ganti jadi RUMAH TANGGA
        $catRumahTangga = Category::create([
            'name' => 'Rumah Tangga',
            'slug' => 'rumah-tangga'
        ]);

        // ... kode bawah (Produk) juga harus disesuaikan variabelnya ...
        
        // Contoh penyesuaian Produk (Opsional, biar dummy datanya nyambung):
        // Ganti variabel $catPakaian jadi $catMebel
        Product::create([
             'category_id' => $catMebel->id, // <-- Ganti ini
             'name' => 'Kursi Kayu Jati',    // <-- Sesuaikan nama barangnya
             'sku' => 'MEB-001',
             'stock' => 20,
             'price' => 500000,
             'description' => 'Kursi kokoh'
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

        $lemari = Product::create([
            'category_id' => $catMebel->id,
            'name' => 'lemari Kayu Jati',
            'sku' => 'LKJ-001',
            'stock' => 20,
            'price' => 1250000,
            'description' => 'kayu jati asli'
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