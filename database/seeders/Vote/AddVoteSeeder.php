<?php

namespace Database\Seeders\Vote;

use App\Models\Kandidat\KandidatKetua;
use App\Models\Kandidat\KandidatWakil;
use App\Models\User\Siswa;
use App\Models\Vote\Vote;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddVoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswa = Siswa::where('id', 1)->first();
        $ketua = KandidatKetua::where('id', 1)->first();
        $wakil = KandidatWakil::where('id', 1)->first();
        $siswa2 = Siswa::where('id', 2)->first();
        $ketua2 = KandidatKetua::where('id', 2)->first();
        $wakil2 = KandidatWakil::where('id', 2)->first();
        $siswa3 = Siswa::where('id', 3)->first();
        $ketua3 = KandidatKetua::where('id', 3)->first();
        $wakil3 = KandidatWakil::where('id', 3)->first();
        Vote::insert([
            [
                'siswa_id' => $siswa->id,
            ],
            [
                'siswa_id' => $siswa2->id,
            ],
            [
                'siswa_id' => $siswa3->id,
            ],
        ]);
    }
}
