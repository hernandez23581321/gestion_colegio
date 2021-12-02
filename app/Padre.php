<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Padre extends Model
{
    protected $filliable=['codigo_padre','identidad','nombre','apellido','direccion','correo','estado'];
}
