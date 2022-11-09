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
                'name' => 'rosyan',
                'email' => 'rosyanxone@gmail.com',
                'password' => 'rosyan'
            ],
            [
                'role' => 'penjual',
                'name' => 'asep',
                'email' => 'asep@gmail.com',
                'password' => 'asep'
            ],
        ];
        
        foreach($users as $user) {
            User::create([
                'role' => $user["role"],
                'name' => $user["name"],
                'email' => $user["email"],
                'password' => Hash::make($user["password"])
                // 'password' => $user["password"]
            ]);
        }
    }
}
