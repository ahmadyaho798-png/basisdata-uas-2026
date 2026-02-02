<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    public function run(): void
{
    DB::table('pasiens')->updateOrInsert(
        ['no_rm' => 'RM0001'],
        [
            'nama' => 'Adi Pratama',
            'nik' => '3174051234560001',
            'jenis_kelamin' => 'L',
            'tanggal_lahir' => '1995-05-12',
            'golongan_darah' => 'O',
            'alamat' => 'Jl. Mawar No.10',
            'no_hp' => '08123456789',
        ]
    );

    DB::table('pasiens')->updateOrInsert(
        ['no_rm' => 'RM0002'],
        [
            'nama' => 'Darminah',
            'nik' => '3174051234560002',
            'jenis_kelamin' => 'P',
            'tanggal_lahir' => '1972-09-19',
            'golongan_darah' => 'O',
            'alamat' => 'Jl. Melati No.24',
            'no_hp' => '08129876543',
        ]
    );
}


}
