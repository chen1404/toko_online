<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    public function keranjang(Produk $product) {
        Keranjang::create([
            'harga' => $product->harga,
            'produk_id' => $product->id,
            'pembeli_id' => Auth::user()->id
        ]);
        session()->flash('success', 'Berhasil Ditambah ke Keranjang!');

        return redirect("/show/$product->id");
    }
}
