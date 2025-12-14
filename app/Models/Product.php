<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'sku',
        'stock',      // Ini stok di gudang
        'borrowed',   // Ini stok di peminjam
        'price',
        'image',
        'description',
        'purchase_date'
    ];

   
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
