<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JadwalPraktek extends Model
{
    use HasFactory;

    protected $table = 'jadwal_prakteks';

    protected $guarded = ['id'];
}
