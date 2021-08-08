<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bancos extends Model
{
    protected $fillable = ["nombre","numeroCuenta","montoInicial"];
    protected $table ="bancos";    
}
