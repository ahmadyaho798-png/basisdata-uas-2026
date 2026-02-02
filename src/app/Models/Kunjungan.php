<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;

    protected $table = 'kunjungans';

    protected $fillable = [
    'nama_pasien',
    'dokter_id',
    'tanggal_kunjungan',
    'keluhan',
    'upload_gambar',
];


    protected $casts = [
        'tanggal_kunjungan' => 'date',
    ];

    // RELASI PASIEN
    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }

    // RELASI DOKTER
    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}
