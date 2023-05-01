<?php

namespace Database\Seeders\Siswa;

use App\Models\User\Kelas;
use App\Models\User\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sepuluh = Kelas::where('id', '1')->first();
        $sebelas = Kelas::where('id', '2')->first();
        $duabelas = Kelas::where('id', '3')->first();
        Siswa::insert([
            [
                'id' => '1',
                'kelas_id' => $sepuluh->id,
                'username' => '12345678910',
                'password' => '12345678910',
            ],
            [
                'id' => '2',
                'kelas_id' => $sebelas->id,
                'username' => '1234567891011',
                'password' => '1234567891011',
            ],
            [
                'id' => '3',
                'kelas_id' => $duabelas->id,
                'username' => '123456789101112',
                'password' => '123456789101112',
            ],
        ]);
    }
}
