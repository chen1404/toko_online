<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function Transaksi() {
        return $this->hasMany(Transaksi::class);
    }
    protected $table = 'produks';
    protected $fillable = ['nama', 'harga', 'kategori', 'gambar', 'deskripsi', 'penjual_id'];
}
