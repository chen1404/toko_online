<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TransaksiController;
use App\Models\Keranjang;
use App\Models\Produk;
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

Route::get('/home', function () {
    return view('pages.home');
})->name('home');

Route::get('/', function () {
    return view('pages.login');
})->name('login ');

Route::get('/index', function () {
    return view('pages.index', [
        "products" => Produk::all()
    ]);
})->name('index');

Route::get('/keranjang', function () {
    return view('pages.keranjang',  ["products" => Keranjang::all()->where('pembeli_id', Auth::user()->id)]);
})->name('pages.keranjang')->middleware('auth');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::post(
    '/action-register',
    [AuthController::class, 'actionRegister']
);

Route::get('/login', function () {
    return view('auth.login');
})->name("login");

Route::post('/action-login', [AuthController::class, 'actionLogin']);

Route::get('/show/{id}', [ProdukController::class, 'show'])->name('show');
