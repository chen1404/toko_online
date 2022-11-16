<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeranjangController extends Controller
{
    public function keranjang(Produk $product, Request $request) {
        $cart = Keranjang::all()->where('pembeli_id', Auth::user()->id)->where('produk_id', $product->id)->first();
        $jumlBrg = $request->get('barang');

        if($cart) {
            $totlHrg = $cart->total_harga + $product->harga * $jumlBrg;
            $jumlBrg += $cart->jumlah_barang;

            $cart->update([
                'total_harga' => $totlHrg,
                'jumlah_barang' => $jumlBrg
            ]);
        } else {
            Keranjang::create([
                'total_harga' => $product->harga*$request->get('barang'),
                'jumlah_barang' => $jumlBrg,
                'produk_id' => $product->id,
                'pembeli_id' => Auth::user()->id
            ]);
        }

        session()->flash('success', 'Berhasil Ditambah ke Keranjang!');
        return redirect("/show/$product->id");
    }

    public function pembeli() {
        $idUser = Auth::user()->id;

        $keranjangs = Keranjang::all()->where('pembeli_id', $idUser);
        $totalHarga = Keranjang::all()->where('pembeli_id', $idUser)->sum('total_harga');
        $biayaAdmin = round($totalHarga * 1 / 100);
        $totalHarga += $biayaAdmin;
        $totalProduk = Keranjang::all()->where('pembeli_id', $idUser)->count();
        $dataUser = User::select('id', 'number', 'address')->where('id', $idUser)->get('number')->first();
        
        return view('pembeli.keranjang', [
            "keranjangs" => $keranjangs,
            "total_harga" => 'Rp.'.$totalHarga,
            "biaya_admin" => 'Rp.'.$biayaAdmin,
            "total_produk" => $totalProduk,
            "nohp_user" => $dataUser['number'],
            "alamat_user" => $dataUser['address'],
            "id_user" => $dataUser['id'],
        ]);
    }
    
    public function destroy($id) {
        $cart = Keranjang::findOrFail($id);
        if($cart->jumlah_barang > 1) {
            $cart->update([
                'total_harga' => $cart->total_harga - $cart->produk->harga,
                'jumlah_barang' => $cart->jumlah_barang - 1
            ]);
        } else {
            $cart->delete();
        }

        return redirect('/keranjang')->with('del-success', 'Produk berhasil dihapus');
    }
}
