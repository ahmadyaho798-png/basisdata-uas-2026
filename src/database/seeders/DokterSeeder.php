<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Dokter;
use Illuminate\Support\Str;

class DokterSeeder extends Seeder
{
    public function run(): void
    {
        $dokters = [
            [
                'poliklinik_id' => 1,
                'nama' => 'Dr. Ahmad',
                'spesialisasi' => 'Dokter Umum',
                'no_str' => 'STR123456',
                'no_sip' => 'SIP123456',
                'no_hp' => '081234567890',
                'email' => 'ahmad@example.com',
                'pengalaman_tahun' => 5,
                'upload_gambar' => null,
            ],
            [
                'poliklinik_id' => 2,
                'nama' => 'Dr. Bella',
                'spesialisasi' => 'Dokter Gigi',
                'no_str' => 'STR234567',
                'no_sip' => 'SIP234567',
                'no_hp' => '081234567891',
                'email' => 'bella@example.com',
                'pengalaman_tahun' => 3,
                'upload_gambar' => null,
            ],
        ];

        foreach ($dokters as $dokter) {
            Dokter::create(array_merge(
                $dokter,
                [
                    'kode_dokter' => 'DOK-' . Str::upper(Str::random(6)),
                ]
            ));
        }
    }
}
