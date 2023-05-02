<?php

namespace Database\Seeders\Kandidat;

use App\Models\Kandidat\KandidatKetua;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddKetuaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KandidatKetua::insert([
            [
                'name' => 'Rehan',
                'birth_date' => '10-9-2004',
                'kelas' => '11 RPL B',
                'visi' => 'Memajukan RPL selaras dengan kemajuan teknologi saat ini',
                'misi' => 'semoga yang tersemogakan akan disemogakan'
            ],
            [
                'name' => 'Fajri',
                'birth_date' => '9-11-2004',
                'kelas' => '11 RPL A',
                'visi' => 'Memajukan RPL dengan berdasarkan agama dan iman',
                'misi' => 'TAKBIR',
            ],
        ]);
    }
}
