<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
       Schema::create('kunjungans', function (Blueprint $table) {
    $table->id();

    $table->string('nama_pasien'); // ← TARUH DI SINI

    $table->foreignId('dokter_id')->constrained()->cascadeOnDelete();

    $table->date('tanggal_kunjungan');
    $table->string('keluhan');

    $table->string('upload_gambar')->nullable();

    $table->timestamps();
});

    }

    public function down(): void
    {
        Schema::table('kunjungans', function (Blueprint $table) {
            $table->dropColumn('nama_pasien');
        });
    }

};
