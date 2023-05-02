<?php

namespace Database\Seeders\User;

use App\Models\User\User;
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
                'password' => 'keren',
                'role' => 1
            ],
            [
                'username' => '1234567891011',
                'password' => 'bagus',
                'role' => 1
            ],
            [
                'username' => '123456789101112',
                'password' => 'hai',
                'role' => 1
            ],
            [
                'username' => 'admin',
                'password' => 'admin',
                'role' => 2
            ],
        ]);
    }
}
