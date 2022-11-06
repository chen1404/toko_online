<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produks = [
            [
                'nama' => 'Apple Watch 4',
                'harga' => '$890',
                'gambar' => 'products-apple-watch.jpg',
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor amet quisquam quaerat sequi saepe doloremque, at accusantium quasi.'
            ],
            [
                'nama' => 'Orange Bogotta',
                'harga' => '$94,509',
                'gambar' => 'products-orange-bogotta.jpg',
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor amet quisquam quaerat sequi saepe doloremque, at accusantium quasi.'
            ],
            [
                'nama' => 'Sofa Ternyaman',
                'harga' => '$1,409',
                'gambar' => 'products-sofa-ternyaman.jpg',
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor amet quisquam quaerat sequi saepe doloremque, at accusantium quasi.'
            ],
            [
                'nama' => 'Bubuk Maketti',
                'harga' => '$225',
                'gambar' => 'products-bubuk-maketti.jpg',
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor amet quisquam quaerat sequi saepe doloremque, at accusantium quasi.'
            ],
            [
                'nama' => 'Tatakan Gelas',
                'harga' => '$45,184',
                'gambar' => 'products-tatakan-gelas.jpg',
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor amet quisquam quaerat sequi saepe doloremque, at accusantium quasi.'
            ],
            [
                'nama' => 'Mavic Kawe',
                'harga' => '$503',
                'gambar' => 'products-mavic-kawe.jpg',
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor amet quisquam quaerat sequi saepe doloremque, at accusantium quasi.'
            ],
            [
                'nama' => 'Black Edition Nike',
                'harga' => '$70,482',
                'gambar' => 'products-black-edition-nike.jpg',
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor amet quisquam quaerat sequi saepe doloremque, at accusantium quasi.'
            ],
            [
                'nama' => 'Monkey Toys',
                'harga' => '$783',
                'gambar' => 'products-monkey-toys.jpg',
                'deskripsi' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor amet quisquam quaerat sequi saepe doloremque, at accusantium quasi.'
            ],
        ];
        
        foreach($produks as $produk) {
            \App\Models\Produk::firstOrCreate($produk);
        }
    }
}
