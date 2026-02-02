<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

 class KunjunganSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('kunjungans')->insert([
    [
        'nama_pasien' => 'Budi Santoso',
        'dokter_id' => 1,
        'tanggal_kunjungan' => '2025-02-01',
        'keluhan' => 'Demam dan Lambung',
        'upload_gambar' => null,
        'created_at' => now(),
        'updated_at' => now(),
    ],
]);

    }
}

