<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    
    public function produk() {
        return $this->belongsTo(Produk::class);
    }
    public function user() {
        return $this->belongsTo(User::class);
    }
    protected $table = 'transaksis';
    protected $fillable = ['total_harga', 'jumlah_barang', 'alamat', 'pembeli_id', 'penjual_id', 'produk_id'];
}
