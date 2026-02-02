<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poliklinik extends Model
{
    protected $fillable = [
        'rumah_sakit_id',
        'kode_poli',
        'nama',
        'lantai',
        'jam_operasional',
    ];

    // Relasi ke RumahSakit
    public function rumahSakit()
    {
        return $this->belongsTo(RumahSakit::class);
    }
}
