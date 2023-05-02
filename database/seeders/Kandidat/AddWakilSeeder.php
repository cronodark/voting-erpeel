<?php

namespace Database\Seeders\Kandidat;

use App\Models\Kandidat\KandidatWakil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddWakilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KandidatWakil::insert([
            [
                'name' => 'Whangsaff',
                'birth_date' => '10-9-2006',
                'kelas' => '10 RPL A',
                'visi' => 'Di songkeh kan',
                'misi' => 'login kan mobil ledeng'
            ],
            [
                'name' => 'Cilok',
                'birth_date' => '9-5-2005',
                'kelas' => '10 RPL B',
                'visi' => 'Rahayukkk',
                'misi' => 'ingpo mabar ep ep',
            ],
        ]);
    }
}
