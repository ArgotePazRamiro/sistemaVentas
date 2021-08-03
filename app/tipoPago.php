<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoPago extends Model
{
    protected $fillable = ["efectivo","efectivo1","tarjeta","tarjeta1","transferencia","transferencia1","deposito","deposito1"];
    protected $table ="tipopago";

    
}
