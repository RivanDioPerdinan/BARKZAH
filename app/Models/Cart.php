<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'product_id', 'quantity'
        // Kolom-kolom lain yang perlu diisi
    ];

    // Jika perlu relasi dengan model lain, seperti Product
    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    // Tambahkan logika atau metode lainnya sesuai kebutuhan aplikasi Anda
}
