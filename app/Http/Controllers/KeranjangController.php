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
        $idUser = Auth::user()->id;

        $keranjangs = Keranjang::all()->where('pembeli_id', $idUser);
        $totalHarga = Keranjang::all()->where('pembeli_id', $idUser)->sum('harga');
        $biayaAdmin = $totalHarga * 0.2 / 100;
        $totalProduk = Keranjang::all()->where('pembeli_id', $idUser)->count();
        $dataUser = User::select('id', 'number', 'address')->where('id', $idUser)->get('number');
        
        return view('pembeli.keranjang', [
            "keranjangs" => $keranjangs,
            "total_harga" => 'Rp.'.$totalHarga,
            "biaya_admin" => 'Rp.'.$biayaAdmin,
            "total_produk" => $totalProduk,
            "nohp_user" => $dataUser[0]['number'],
            "alamat_user" => $dataUser[0]['address'],
            "id_user" => $dataUser[0]['id'],
        ]);
    }
    
    public function destroy($id) {
        $produk = Keranjang::findOrFail($id);
        $produk->delete();

        return redirect('/keranjang')->with('success', 'Produk berhasil dihapus');
    }
}
