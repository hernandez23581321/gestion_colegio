<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotasParciales extends Model
{
    protected $filliable=['codigo_nota','codigo_parcial','codigo_materia','nota','estado'];
}
