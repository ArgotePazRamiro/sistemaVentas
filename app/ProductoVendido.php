<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoVendido extends Model
{
    protected $table = "productos_vendidos";
    protected $fillable = ["id_venta","categoria", "precio_comision","nombre","marca","total", "precio", "cantidad"];
}
