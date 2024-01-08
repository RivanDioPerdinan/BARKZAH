<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';
    public $timestamps = true;
    protected $fillable = [
        'sku',
        'nama_produk',
        'tipe',
        'kategori',
        'harga',
        'diskon',
        'quantity',
        'foto',
        'tersedia',
    ];
    // public function product()
    // {
    //     return $this->hasOne(tblCart::class, 'id_barang', 'id');
    // }
}