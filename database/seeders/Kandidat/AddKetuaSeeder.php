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
                'id' => 1,
                'name' => 'Hilmy Rizky Nugraha',
                'birth_date' => '3-23-2006',
                'kelas' => '11 RPL A',
                'visi' => 'Membangun Jurusan RPL sebagai Jurusan yang aktif, berkarakter, disiplin, unggul, berdaya saing dan bertanggung jawab dengan berlandaskan Ketuhanan yang maha esa, serta menjadikan Keluarga Besar RPL yang solid dan selalu bersama untuk menuju langkah lebih baik kedepannya.',
            ],
            [
                'id' => 2,
                'name' => 'Fajri',
                'birth_date' => '9-11-2004',
                'kelas' => '11 RPL A',
                'visi' => 'Mewujudkan RPL menjadi jurusan yang lebih baik, sehingga dapat menjadikan siswa/i yang baik dan juga berkarakter, dengan menyediakan RPL sebagai wadah yang menampung segala aspirasi, harapan, serta mengambangkan kreativita',
            ],
        ]);
    }
}
