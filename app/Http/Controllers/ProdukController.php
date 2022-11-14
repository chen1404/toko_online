<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProdukController extends Controller
{
    public function create()
    {
        $id = Auth::user()->id;
        return view('penjual.create', ["id" => $id]);
    }

    public function store(Request $request)
    {
        $request->validate([
            "nama" => 'required|string',
            "harga" => 'required|string',
            "kategori" => 'required|string',
            "deskripsi" => 'required|string',
            "penjual_id" => 'required',
        ]);

        if ($request->hasFile('file')) {
            $slug = Str::slug($request->get('nama'), '-');
            $randstr = Str::lower(Str::random(5));
            $file = $request->file('file');
            $filename = 'products-' . $slug . '-' . $randstr . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img/products'), $filename);

            $product = new Produk([
                "nama" => $request->get('nama'),
                "harga" => $request->get('harga'),
                "kategori" => $request->get('kategori'),
                "gambar" => $filename,
                "deskripsi" => $request->get('deskripsi'),
                "penjual_id" => $request->get('penjual_id')
            ]);
            $product->save();
        }

        // Produk::create($validateData);
        return redirect('/produk')->with('success', 'Produk berhasil ditambahkan');
    }
    
    public function show(Produk $id) {
        return view('pembeli.show', [
            'products' => $id,
        ]);
    }
    public function edit(Produk $produk) {
        return view('penjual.update', [
            'product' => $produk,
        ]);
    }
    
    public function update(Request $request, $id) {
        $produk = Produk::findOrFail($id);

        $filename = $produk->gambar;
        if ($request->hasFile('file')) {
            $slug = Str::slug($request->get('nama'), '-');
            $randstr = Str::lower(Str::random(5));
            $file = $request->file('file');
            $filename = 'products-' . $slug . '-' . $randstr . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img/products'), $filename);
        }

        $validateData = $request->validate([
            "nama" => 'required|string',
            "harga" => 'required|string',
            "kategori" => 'required|string',
            "gambar" => $filename,
            "deskripsi" => 'required|string',
            "penjual_id" => 'required',
        ]);
        $produk->update($validateData);

        return redirect("/produk")->with('success', 'Rental berhasil diubah');
    }
    
    public function destroy($id) {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect('/produk')->with('success', 'Rental berhasil dihapus');
    }
}

