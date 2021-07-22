<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    protected $fillable = ['id','nombre','marca','nSerie','precioUnitario', 'stock', 'precioComision','categoria','estado'];
    protected $table = 'productos';
}
