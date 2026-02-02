<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_rm',
        'nik',
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'kota',
        'provinsi',
        'no_hp',
        'golongan_darah',
        'status_pernikahan',
        'pekerjaan',
        'kontak_darurat_nama',
        'kontak_darurat_hp',
        'kontak_darurat_hubungan',
        'upload_gambar',
    ];
}
