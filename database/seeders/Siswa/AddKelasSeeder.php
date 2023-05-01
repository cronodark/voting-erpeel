<?php

namespace Database\Seeders\Siswa;

use App\Models\User\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kelas::insert([
            [
                'id' => '1',
                'name' => '10'
            ],
            [
                'id' => '2',
                'name' => '11'
            ],
            [
                'id' => '3',
                'name' => '12'
            ],
        ]);
    }
}
