<?php

namespace Database\Seeders;

use Database\Seeders\Kandidat\AddKetuaSeeder;
use Database\Seeders\Kandidat\AddWakilSeeder;
use Database\Seeders\Siswa\AddKelasSeeder;
use Database\Seeders\Siswa\AddSiswaSeeder;
use Database\Seeders\User\AddUserSeeder;
use Database\Seeders\Vote\AddVoteSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AddKetuaSeeder::class,
            AddWakilSeeder::class,
            AddKelasSeeder::class,
            // AddUserSeeder::class,
            // AddSiswaSeeder::class,
            // AddVoteSeeder::class,
        ]);
    }
}
