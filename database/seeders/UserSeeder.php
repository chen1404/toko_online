<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'role' => 'penjual',
                'name' => 'Rausyanfikr Karmayoga',
                'address' => 'Kalimantan Timur, Samarinda. Jl. Abdul W.',
                'number' => '081351580524',
                'email' => 'rausyanfikrkarmayoga@gmail.com',
                'password' => '123'
            ],
            [
                'role' => 'penjual',
                'name' => 'Asep Harahap',
                'address' => 'Kalimantan Selatan, Banjarmasin. Jl. Juanda',
                'number' => '0824561727383',
                'email' => 'asep@gmail.com',
                'password' => '123'
            ],
            [
                'role' => 'pembeli',
                'name' => 'Vanny Putri',
                'address' => 'Kalimantan Selatan, Banjarmasin. Jl. Juanda',
                'number' => '0824561727383',
                'email' => 'vannyputriandrini@gmail.com',
                'password' => '123'
            ],
            [
                'role' => 'pembeli',
                'name' => 'Rosyan Xone',
                'address' => 'Kalimantan Timur, Samarinda. Jl. Abdul W.',
                'number' => '081351580524',
                'email' => 'rosyanxone@student.unmul.ac.id',
                'password' => '123'
            ],
        ];
        
        foreach($users as $user) {
            User::create([
                'role' => $user["role"],
                'name' => $user["name"],
                'address' => $user["address"],
                'number' => $user["number"],
                'email' => $user["email"],
                'password' => Hash::make($user["password"])
            ]);
        }
    }
}
