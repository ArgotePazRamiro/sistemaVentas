<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ["nombre", "categoria", "marca","codigo","precio_compra", "precio_venta", "precio_comision","stock",
    ];
        
}
