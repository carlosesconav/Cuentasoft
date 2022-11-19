<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cuenta_cobro extends Model
{
    protected $fillable = [

        'cliente',
        'fecha_inicio',
        'fecha_final',
        'valor',
        'meses_pagados',
        'fecha_pago'

          ];
}
