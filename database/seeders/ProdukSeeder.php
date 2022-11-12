<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB:table

        $produks = [
            [
                'nama' => 'Apple Watch 4',
                'harga' => '890',
                'gambar' => 'products-apple-watch.jpg',
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor amet quisquam quaerat sequi saepe doloremque, at accusantium quasi.',
                'penjual_id' => '1'
            ],
            [
                'nama' => 'Orange Bogotta',
                'harga' => '94509',
                'gambar' => 'products-orange-bogotta.jpg',
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor amet quisquam quaerat sequi saepe doloremque, at accusantium quasi.',
                'penjual_id' => '1'
            ],
            [
                'nama' => 'Sofa Ternyaman',
                'harga' => '1409',
                'gambar' => 'products-sofa-ternyaman.jpg',
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor amet quisquam quaerat sequi saepe doloremque, at accusantium quasi.',
                'penjual_id' => '1'
            ],
            [
                'nama' => 'Bubuk Maketti',
                'harga' => '225',
                'gambar' => 'products-bubuk-maketti.jpg',
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor amet quisquam quaerat sequi saepe doloremque, at accusantium quasi.',
                'penjual_id' => '1'
            ],
            [
                'nama' => 'Tatakan Gelas',
                'harga' => '45184',
                'gambar' => 'products-tatakan-gelas.jpg',
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor amet quisquam quaerat sequi saepe doloremque, at accusantium quasi.',
                'penjual_id' => '2'
            ],
            [
                'nama' => 'Mavic Kawe',
                'harga' => '503',
                'gambar' => 'products-mavic-kawe.jpg',
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor amet quisquam quaerat sequi saepe doloremque, at accusantium quasi.',
                'penjual_id' => '2'
            ],
            [
                'nama' => 'Black Edition Nike',
                'harga' => '70482',
                'gambar' => 'products-black-edition-nike.jpg',
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor amet quisquam quaerat sequi saepe doloremque, at accusantium quasi.',
                'penjual_id' => '2'
            ],
            [
                'nama' => 'Monkey Toys',
                'harga' => '783',
                'gambar' => 'products-monkey-toys.jpg',
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor amet quisquam quaerat sequi saepe doloremque, at accusantium quasi.',
                'penjual_id' => '2'
            ],
        ];
        
        foreach($produks as $produk) {
            \App\Models\Produk::firstOrCreate($produk);
        }
    }
}
