<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    // 1. Daftar kolom yang boleh diisi (Wajib ada agar data bisa disimpan)
    protected $fillable = [
        'user_id',
        'product_id',
        'type',             
        'quantity',
        'recipient',
        'location',
        'total_price',
        'transaction_date',
        'notes'
    ];

    // 2. Mengubah format tanggal otomatis
    protected $casts = [
        'transaction_date' => 'date',
    ];

    // 3. Relasi: Transaksi ini milik produk apa?
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // 4. Relasi: Transaksi ini dicatat oleh siapa (Admin/Staff)?
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
