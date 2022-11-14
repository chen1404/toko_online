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
                'id' => '1',
                'harga' => '890',
                'pembeli_id' => '4',
                'produk_id' => '1'
            ],
            [
                'id' => '2',
                'harga' => '890',
                'pembeli_id' => '4',
                'produk_id' => '1'
            ],
            [
                'harga' => '1409',
                'pembeli_id' => '4',
                'produk_id' => '4'
            ],
            [
                'id' => '4',
                'harga' => '890',
                'pembeli_id' => '4',
                'produk_id' => '1'
            ],
            [
                'harga' => '200',
                'pembeli_id' => '4',
                'produk_id' => '4'
            ],
        ];
        
        foreach($barangs as $barang) {
            \App\Models\Keranjang::firstOrCreate($barang);
        }
    }
}
