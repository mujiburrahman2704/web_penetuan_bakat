<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'email' => 'admin@gmail.com',
                'isAdmin' => '1',
                'password' => Hash::make('admin123'),
            ]
        );
        User::create(
            [
                'email' => 'user@gmail.com',
                'isAdmin' => '0',
                'password' => Hash::make('user1234'),
            ]
        );
    }
}
