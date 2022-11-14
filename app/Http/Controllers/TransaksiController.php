<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function store($id) {

        $keranjang = Keranjang::all()->where('pembeli_id', $id);
        
        foreach($keranjang as $keranj) {
            $count = Keranjang::where('produk_id', '=', $keranj->produk->id)->count();
            $totalHarga = $keranj->harga * $count;

            $product = new Transaksi([
                "total_harga" => $totalHarga,
                "jumlah_barang" => $count,
                "alamat" => 'Balikpapan',
                "pembeli_id" => $id,
                "penjual_id" => $keranj->produk->penjual_id,
                "produk_id" => $keranj->produk->id,
            ]); 
            $product->save();
            
            if(Transaksi::where('pembeli_id', '=', $id)->where('produk_id', '=', $keranj->produk->id)->where('jumlah_barang', '=', $count)->count() > 1) {
                $product->delete();
            }
        }
        Keranjang::where('pembeli_id', $id)->delete();

        return redirect('/keranjang')->with('success', 'Keranjang berhasil di Checkout!');
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
