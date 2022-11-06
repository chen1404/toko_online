<?php

use App\Http\Controllers\AuthController;
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

Route::get('/login', function () {
    return view('pages.login');
})->name('login');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::post(
    '/action-register',
    [AuthController::class, 'actionRegister']
);

Route::get('/login', [
    AuthController::class,
    'loginView'
])->name("login");

Route::post('/action-login', [AuthController::class, 'actionLogin']);

Route::get('/logout', [AuthController::class, 'logout']);
