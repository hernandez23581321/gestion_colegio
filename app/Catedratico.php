<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catedratico extends Model
{
    protected $filliable=['codigo_catedratico','identidad','nombre','apellido','direccion','especialidad','estado'];
}
