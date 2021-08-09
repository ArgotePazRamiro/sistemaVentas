<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = ["nombre", "categoria", "codigo", "marca","precio_compra", "precio_venta","stock",
    ];

}
