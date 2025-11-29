<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id', 'name', 'sku', 'stock', 
        'price', 'image', 'description'
    ];

    // --- BAGIAN INI YANG HILANG/ERROR DI TEMPATMU ---
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    // -----------------------------------------------

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
