<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    public function run(): void
{
    DB::table('obats')->updateOrInsert(
        ['kode_obat' => 'OB001'],
        [
            'nama' => 'Omeprazole',
            'jenis' => 'Generik',
            'kategori' => 'Kapsul',
            'satuan' => 'strip',
            'harga' => 5000,
            'stok' => 150,
        ]
    );

    DB::table('obats')->updateOrInsert(
        ['kode_obat' => 'OB002'],
        [
            'nama' => 'Amoxicillin',
            'jenis' => 'Generik',
            'kategori' => 'Kapsul',
            'satuan' => 'strip',
            'harga' => 12000,
            'stok' => 300,
        ]
    );
}

}
