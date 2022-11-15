<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function store(Request $request) {
        $provinsi = $request->get('Province');
        $kota = $request->get('city');
        $alamat = $request->get('addressOne');
        $nohp = $request->get('mobile');
        $jumlahBarang = $request->get('counts');

        if($jumlahBarang > 0) {
            $id = Auth::user()->id;
            $carts = Keranjang::all()->where('pembeli_id', $id);
            $alamatLengkap = $provinsi.', '.$kota.'. '.$alamat.'; '.$nohp;

            foreach($carts as $cart) {
                $produk = Produk::findOrFail($cart->produk->id);

                $sisaBarang = $produk->stok - $cart->jumlah_barang;
                // if($sisaBarang == 0) {
                //     $produk->delete();
                // } else {
                // }
                $produk->update(['stok' => $sisaBarang]);

                $transaksi = new Transaksi([
                    "total_harga" => $cart->total_harga,
                    "jumlah_barang" => $cart->jumlah_barang,
                    "alamat" => $alamatLengkap,
                    "pembeli_id" => $id,
                    "penjual_id" => $cart->produk->penjual_id,
                    "produk_id" => $cart->produk->id,
                ]); 
                $transaksi->save();
            }
            Keranjang::where('pembeli_id', $id)->delete();
            return redirect('/success');
        } else {
            return redirect('/keranjang');
        }
    }
    
    public function storeKeranjang(Produk $products) {
        $transaksi = new Transaksi([
            "total_harga" => $products->harga,
            "jumlah_barang" => '1',
            "alamat" => 'Samarinda',
            "pembeli_id" => Auth::user()->id,
            "penjual_id" => $products->penjual_id,
            "produk_id" => $products->id,
        ]); 
        $transaksi->save();
        
        return redirect("/show/$products->id")->with('success', 'Produk berhasil di Checkout!');
    }

    public function daftarTransaksi() {
        $transaksi = Transaksi::all()->where('pembeli_id', Auth::user()->id);

        return view('pembeli.checkout', ["transactions" => $transaksi]);
    }

    public function penjual() {
        $transactions = Transaksi::all()->where('penjual_id', Auth::user()->id);
        $jumlahTransaksi = Transaksi::all()->where('penjual_id', Auth::user()->id)->count();
        $totalIncome = Transaksi::where('penjual_id', Auth::user()->id)->sum('total_harga');
        $jumlahCustomer = Transaksi::select('pembeli_id')->distinct()->get()->count();
        
        return view('penjual.home', [
            "transactions" => $transactions,
            "jumlah_transaksi" => $jumlahTransaksi,
            "total_income" => $totalIncome,
            "customer" => $jumlahCustomer,
        ]);
    }
}
