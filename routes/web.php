<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Models\Keranjang;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// AUTHENTICATION
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
Route::post('/action-register', [AuthController::class, 'actionRegister']);

Route::get('/login', function () {
    return view('auth.login');
})->name("login");
Route::post('/action-login', [AuthController::class, 'actionLogin']);

Route::get('/logout', [AuthController::class, 'logout']);
// END AUTHENTICATION

// PEMBELI
Route::get('/', function () {
    return view('pembeli.home', [
        "products" => Produk::all()
    ]);
})->name('pembeli.home');

Route::get('/kategori/{produk}', function ($kategori) {
    return view('pembeli.home', ["products" => Produk::all()->where('kategori', $kategori)]);
})->name('pembeli.home.kategori');

Route::get('/show/{id}', [ProdukController::class, 'show'])->name('show')->middleware('auth');
Route::post('/{product}', [KeranjangController::class, 'keranjang'])->name('keranjang')->middleware('auth');

Route::get('/keranjang', function () {
    return view('pembeli.keranjang',  ["keranjangs" => Keranjang::all()->where('pembeli_id', Auth::user()->id)]);
})->name('pembeli.keranjang')->middleware('auth');

Route::get('/checkout', function () {
    return view('pembeli.checkout',  ["products" => Transaksi::all()->where('pembeli_id', Auth::user()->id)]);
})->name('pembeli.checkout')->middleware('auth');

Route::get('/checkout/{id}', [TransaksiController::class, 'store'])->name('checkout')->middleware('auth');
Route::get('/checkout/produk/{products}', [TransaksiController::class, 'storeKeranjang'])->name('checkout.produk')->middleware('auth');
// END PEMBELI


// PENJUAL
Route::get('/penjual', function () {
    return view('penjual.home', [
        "transaksix" => Transaksi::all()->where('penjual_id', Auth::user()->id),
        "total_transaksi" => Transaksi::all()->where('penjual_id', Auth::user()->id)->count(),
        "income" => Transaksi::where('penjual_id', Auth::user()->id)->sum('total_harga'),
        "customer" => Transaksi::select('pembeli_id')->distinct()->get()->count(),
    ]);
})->name('penjual.home')->middleware('auth');

Route::get('/produk/create', [ProdukController::class, 'create'])->name('penjual.create')->middleware('auth');
Route::post('/produk/store', [ProdukController::class, 'store'])->name('penjual.store')->middleware('auth');

Route::get('/produk', function () {
    return view('penjual.produk', ["products" => Produk::all()->where('penjual_id', Auth::user()->id)]);
})->name('produk');

Route::get('/update/{produk}', [ProdukController::class, 'edit'])->name('edit')->middleware('auth');
Route::put('/{id}', [ProdukController::class, 'update'])->name('update')->middleware('auth');

Route::delete('/{id}', [ProdukController::class, 'destroy'])->name('delete')->middleware('auth');
// END PENJUAL

// Route Satria

Route::get('success', function () {
    return view('pembeli.success', [
        "products" => Produk::all()
    ]);
})->name('pembeli.success');
