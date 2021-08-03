<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductoCreditos extends Model
{
    protected $table = "productos_creditos";
    protected $fillable = ["id_creditos","categoria", "precio_comision","nombre","marca","total", "precio", "cantidad"];

}
