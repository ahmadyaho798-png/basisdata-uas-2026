<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('jadwal_prakteks', function (Blueprint $table) {
            $table->id();

            // FK ke dokters
            $table->foreignId('dokter_id')
                  ->constrained('dokters')
                  ->cascadeOnDelete();

            $table->enum('hari', [
                'Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'
            ]);

            $table->time('jam_mulai');
            $table->time('jam_selesai');

            $table->unsignedInteger('kuota_pasien')->default(20);
            $table->enum('status', ['aktif','libur'])->default('aktif');

            $table->timestamps();

            // cegah jadwal dobel
            $table->unique(
                ['dokter_id', 'hari', 'jam_mulai', 'jam_selesai'],
                'unique_jadwal_dokter'
            );
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal_prakteks');
    }
};
