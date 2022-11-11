<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function store($id) {

        $keranjang = Keranjang::all()->where('pembeli_id', $id);
        echo count($keranjang);
        foreach($keranjang as $keranj) {
            $product = new Transaksi([
                "total_harga" => $keranj->harga,
                "jumlah_barang" => '1',
                "pembeli_id" => $id,
                "penjual_id" => '2',
                "produk_id" => '3',
            ]);
            $product->save();
        }

        // return redirect('/keranjang')->with('success', 'Rental berhasil ditambahkan');
    }
}
