<?php

namespace Database\Seeders;

use App\Models\Dokter;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RumahSakitSeeder::class,
            PoliklinikSeeder::class,
            DokterSeeder::class,
            PasienSeeder::class,
            JadwalPraktekSeeder::class,
            KunjunganSeeder::class,
            ObatSeeder::class,
            ResepSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
        ]);
    }
}
