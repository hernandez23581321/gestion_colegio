<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $filliable=['codigo_alumno','identidad','nombre','apellido','direccion','correo'];
}
