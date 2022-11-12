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
})->name('pembeli.home')->middleware('auth');

Route::get('/show/{id}', [ProdukController::class, 'show'])->name('show')->middleware('auth');
Route::post('/{product}', [KeranjangController::class, 'keranjang'])->name('keranjang')->middleware('auth');

Route::get('/keranjang', function () {
    return view('pembeli.keranjang',  ["products" => Keranjang::all()->where('pembeli_id', Auth::user()->id)]);
})->name('pembeli.keranjang')->middleware('auth');

Route::get('/checkout', function () {
    return view('pembeli.checkout',  ["products" => Transaksi::all()->where('pembeli_id', Auth::user()->id)]);
})->name('pembeli.checkout')->middleware('auth');

Route::get('/checkout/{id}', [TransaksiController::class, 'store'])->name('pembeli.checkout')->middleware('auth');
// END PEMBELI


// PENJUAL
Route::get('/penjual/home', function () {
    $id = Auth::user()->id;
    return view('penjual.home',  ["products" => Produk::all()->where('penjual_id', $id)]);
})->name('penjual.home')->middleware('auth');

Route::get('/penjual', function () {
    $id = Auth::user()->id;
    return view('penjual.home',  ["products" => Produk::all()->where('penjual_id', $id)]);
})->name('penjual.home')->middleware('auth');

Route::get('/penjual/create', [ProdukController::class, 'create'])->name('penjual.create')->middleware('auth');
Route::post('/penjual/store', [ProdukController::class, 'store'])->name('penjual.store')->middleware('auth');
// END PENJUAL
