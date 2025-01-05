<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'admin',
            'email' => 'admin@example.com',
            'password' => Hash::make('pass'), // パスワードは必ずハッシュ化する
            'role' => 'admin',
        ]);
    
        User::create([
            'username' => 'user1',
            'email' => 'user1@example.com',
            'password' => Hash::make('pass'),
            'role' => 'user',
        ]);
    }
}
