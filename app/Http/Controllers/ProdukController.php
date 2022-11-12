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
            "deskripsi" => 'required|string',
            "penjual_id" => 'required',
        ]);

        if ($request->hasFile('file')) {
            $slug = Str::slug($request->get('nama'), '-');
            $randstr = Str::lower(Str::random(5));
            $file = $request->file('file');
            $filename = 'products-' . $slug . '-' . $randstr . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img/products'), $filename);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            // $request->file->store('product', 'public');
            // "gambar" => $request->file->hashName(),
            // Store the record, using the new file hashname which will be it's new filename identity.

            $product = new Produk([
                "nama" => $request->get('nama'),
                "harga" => $request->get('harga'),
                "gambar" => $filename,
                "deskripsi" => $request->get('deskripsi'),
                "penjual_id" => $request->get('penjual_id')
            ]);
            $product->save(); // Finally, save the record.
        }

        // Produk::create($validateData);
        return redirect('/penjual/home')->with('success', 'Produk berhasil ditambahkan');
    }

    public function show(Produk $id)
    {
        return view('pages.show', [
            'products' => $id,
        ]);
    }
}
