<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KeranjangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barangs = [
            [
                'nama' => 'Apple Watch 4',
                'harga' => '$890',
                'gambar' => 'products-apple-watch.jpg',
                'pembeli_id' => '3'
            ],
            [
                'nama' => 'Monkey Toys',
                'harga' => '$783',
                'gambar' => 'products-monkey-toys.jpg',
                'pembeli_id' => '3'
            ],
        ];
        
        foreach($barangs as $barang) {
            \App\Models\keranjang::firstOrCreate($barang);
        }
    }
}
