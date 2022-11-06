<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function show(Produk $id) {
        return view('pages.show', [
            'products' => $id,
        ]);
    }
}
