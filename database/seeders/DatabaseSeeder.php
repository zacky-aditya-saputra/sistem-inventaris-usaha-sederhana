<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // KITA HANYA BUTUH SATU USER UNTUK LOGIN PERTAMA KALI
        // Sisanya (Barang, Kategori, Transaksi) diisi manual lewat Web
        
        User::create([
            'name' => 'Admin Gudang',
            'email' => 'admin@inventa.com',
            'password' => bcrypt('password'), // Password default: password
        ]);
    }
}