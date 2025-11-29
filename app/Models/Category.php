<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // 1. Izinkan kolom ini diisi (PENTING untuk Seeder & Create)
    protected $fillable = ['name', 'slug'];

    // 2. Definisikan Hubungan: Satu Kategori punya Banyak Produk
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
