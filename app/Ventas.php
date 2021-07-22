<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    protected $fillable = ['id','movimiento', 'subtotal', 'descuento', 'total','cliente_id','user_id'];
    protected $table = 'ventas';
}
