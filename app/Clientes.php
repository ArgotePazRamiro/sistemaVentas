<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = ['id','nombre', 'aPaterno', 'aMaterno', 'ci','celular'];
    protected $table = 'clientes';
}
