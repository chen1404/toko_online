<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Models\Produk;
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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/index', function () {
    return view('pages.index', [
        "products" => Produk::all()
    ]);
})->name('index')->middleware('auth');

Route::get('/penjual/home/{id}', function ($id) {

    return view('penjual.home',  ["products" => Produk::all()->where('penjual_id', $id)]);
})->name('penjual.home')->middleware('auth');


Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::post(
    '/action-register',
    [AuthController::class, 'actionRegister']
);

Route::get('/login', function () {
    return view('pages.login');
})->name("login");

Route::post('/action-login', [AuthController::class, 'actionLogin']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/penjual/create/{id}', [ProdukController::class, 'create'])->name('penjual.create')->middleware('auth');
Route::post('/penjual/store', [ProdukController::class, 'store'])->name('penjual.store')->middleware('auth');

Route::get('/show/{id}', [ProdukController::class, 'show'])->name('show');
