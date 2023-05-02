<?php

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'username' => '12345678910',
                'password' => bcrypt('12345678910'),
                'role' => 1
            ],
            [
                'username' => '1234567891011',
                'password' => bcrypt('1234567891011'),
                'role' => 1
            ],
            [
                'username' => '123456789101112',
                'password' => bcrypt('123456789101112'),
                'role' => 1
            ],
            [
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'role' => 2
            ]
        ]);
    }
}
