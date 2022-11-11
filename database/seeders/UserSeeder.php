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
                'name' => 'rausyanfikrkarmayoga',
                'email' => 'rausyanfikrkarmayoga@gmail.com',
                'password' => '123'
            ],
            [
                'role' => 'penjual',
                'name' => 'rosyanxone',
                'email' => 'rosyanxone@student.unmul.ac.id',
                'password' => '123'
            ],
            [
                'role' => 'pembeli',
                'name' => 'vannyputriandrini',
                'email' => 'vannyputriandrini@gmail.com',
                'password' => '123'
            ],
            [
                'role' => 'pembeli',
                'name' => 'asep',
                'email' => 'asep@gmail.com',
                'password' => '123'
            ],
        ];
        
        foreach($users as $user) {
            User::create([
                'role' => $user["role"],
                'name' => $user["name"],
                'email' => $user["email"],
                'password' => Hash::make($user["password"])
            ]);
        }
    }
}
