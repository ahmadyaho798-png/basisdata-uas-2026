<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;

abstract class Controller
{
    use HasFactory;
    protected $guarded = ['id'];
}


