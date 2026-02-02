<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Dokter;

class JadwalPraktekSeeder extends Seeder
{
    public function run(): void
    {
        $dokters = Dokter::all();

        if ($dokters->isEmpty()) {
            $this->command->warn('Seeder JadwalPraktek dilewati: dokter belum ada');
            return;
        }

        $hari = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat'];

        foreach ($dokters as $dokter) {
            foreach ($hari as $h) {
                DB::table('jadwal_prakteks')->updateOrInsert(
                    [
                        'dokter_id' => 1,
                        'hari' => 'Senin',
                        'jam_mulai' => '08:00:00',
                        'jam_selesai' => '12:00:00'
                    ],
                    [
                        'kuota_pasien' => 20,
                        'status' => 'aktif',
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]
                );
            }
        }
    }
}
