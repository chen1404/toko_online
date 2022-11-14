<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\User;
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

    public function pembeli() {
        $keranjangs = Keranjang::all()->where('pembeli_id', Auth::user()->id);
        $totalHarga = Keranjang::all()->where('pembeli_id', Auth::user()->id)->sum('harga');
        $biayaAdmin = $totalHarga * 5 / 100;
        $totalProduk = Keranjang::all()->where('pembeli_id', Auth::user()->id)->count();
        // $dataUser = User::all()->where('id', Auth::user()->id);
        
        return view('pembeli.keranjang', [
            "keranjangs" => $keranjangs,
            "total_harga" => 'Rp.'.$totalHarga,
            "biaya_admin" => 'Rp.'.$biayaAdmin,
            "total_produk" => $totalProduk,
        ]);
    }
    
    public function destroy($id) {
        $produk = Keranjang::findOrFail($id);
        $produk->delete();

        return redirect('/keranjang')->with('success', 'Produk berhasil dihapus');
    }
}
