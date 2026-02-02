<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    protected $fillable = [
        'poliklinik_id',
        'kode_dokter',
        'nama',
        'spesialisasi',
        'no_str',
        'no_sip',
        'no_hp',
        'email',
        'pengalaman_tahun',
        'upload_gambar',
    ];
}
