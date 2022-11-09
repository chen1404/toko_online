<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function create($id) {
        return view('penjual.create', ["id" => $id]);
    }

    public function store(Request $request) {
        $validateData = $request->validate([
            "nama" => 'required|string',
            "harga" => 'required|string',
            "deskripsi" => 'required|string',
            "gambar" => 'required|string',
            "penjual_id" => 'required',
        ]);

        Produk::create($validateData);

        return redirect('/penjual/home/{penjual_id}')->with('success', 'Produk berhasil ditambahkan');
    }
    
    public function show(Produk $id) {
        return view('pages.show', [
            'products' => $id,
        ]);
    }
}
