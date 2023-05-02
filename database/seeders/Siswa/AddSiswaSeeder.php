<?php

namespace Database\Seeders\Siswa;

use App\Models\User\Kelas;
use App\Models\User\Siswa;
use App\Models\User\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddSiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $idkeren = User::where('id', '1')->first();
        $idbagus = User::where('id', '2')->first();
        $idhai = User::where('id', '3')->first();
        $sepuluh = Kelas::where('id', '1')->first();
        $sebelas = Kelas::where('id', '2')->first();
        $duabelas = Kelas::where('id', '3')->first();
        Siswa::insert([
            [
                'user_id' => $idkeren->id,
                'kelas_id' => $sepuluh->id,
                'nisn' => '12345678910',
                'nis' => '12345678910',
                'nama' => 'Keren',
                'jenkel' => 'L',
            ],
            [
                'user_id' => $idbagus->id,
                'kelas_id' => $sebelas->id,
                'nisn' => '1234567891011',
                'nis' => '1234567891011',
                'nama' => 'Betul',
                'jenkel' => 'P',
            ],
            [
                'user_id' => $idhai->id,
                'kelas_id' => $duabelas->id,
                'nisn' => '123456789101112',
                'nis' => '123456789101112',
                'nama' => 'Hai',
                'jenkel' => 'L',
            ],
        ]);
    }
}
