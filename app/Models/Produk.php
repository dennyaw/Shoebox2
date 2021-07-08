<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = [
        'user_id',
        'nama_produk',
        'kategori_produk',
        'size_produk',
        'deskripsi_produk',
        'foto',
        'qty',
        'harga',
    ];
    
    public function setSizeAttribute($value)
    {
        $this->attributes['size_produk'] = json_encode($value);
    }

    public function getSizeAttribute($value)
    {
        return $this->attributes['size_produk'] = json_decode($value);
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function images() {
        return $this->hasMany('App\Models\ProdukImage', 'produk_id');
    }

    public function pesanan_detail(){
        return $this->hasMany('App\Models\PesananDetail','id_produk', 'id');
    }
}