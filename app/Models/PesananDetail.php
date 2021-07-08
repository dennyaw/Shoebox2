<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_produk', 'id_pesanan',
        'size_produk', 'jumlah', 'jumlah_harga',
    ];
    public function barang()
    {
        return $this->belongsTo(Produk::class, 'id_produk', 'id');
    }

    public function pesanan()
    {
        return $this->belongsTo('App\Models\Pesanan', 'id_pesanan', 'id');
    }
}
