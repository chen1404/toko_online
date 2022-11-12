<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    public function keranjang(Produk $product) {
        Keranjang::create([
            'nama' => $product->nama,
            'harga' => $product->harga,
            'gambar' => $product->gambar,
            'pembeli_id' => Auth::user()->id
        ]);
        session()->flash('success', 'Berhasil Ditambah ke Keranjang!');

        return redirect("/show/$product->id");
    }
}
