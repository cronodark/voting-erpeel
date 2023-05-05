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
                'id' => 1,
                'name' => 'Daffa Salmanaufal Adhyasta',
                'birth_date' => '10-23-2006',
                'kelas' => '10 RPL A',
                'visi' => 'Memajukan RPL ke arah yang lebih positif dengan meningkatkan solidaritas dan pengetahuan agama maupun duniawi',
            ],
            [
                'id' => 2,
                'name' => 'Riyan Septiana',
                'birth_date' => '9-5-2006',
                'kelas' => '10 RPL B',
                'visi' => 'Menjadikan jurusan yang lebih baik, dengan memiliki pribadi yang aktif, kreatif, inovatif, bersosialisasi, dan menjungjung tinggi nilai kekeluargaan',
            ],
        ]);
    }
}
