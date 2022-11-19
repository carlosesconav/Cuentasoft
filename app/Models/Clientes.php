<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = [

        'nombre',
        'apellidos',
        'correo',
        'celular',
        'direccion',
        'foto'

          ];
}
