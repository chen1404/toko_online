<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactions = [
            [
                'total_harga' => '2890',
                'jumlah_barang' => '4',
                'alamat' => 'Samarinda',
                'pembeli_id' => '3',
                'penjual_id' => '1',
                'produk_id' => '1'
            ],
            [
                'total_harga' => '1783',
                'jumlah_barang' => '2',
                'alamat' => 'Balikpapan',
                'pembeli_id' => '3',
                'penjual_id' => '2',
                'produk_id' => '8'
            ],
        ];
        
        foreach($transactions as $transaction) {
            \App\Models\Transaksi::firstOrCreate($transaction);
        }
    }
}
