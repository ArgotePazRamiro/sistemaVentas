<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creditos extends Model
{
    protected $fillable = ["aCuenta","saldo","codigo","fechaLimite"];
    public function productos()
    {
        return $this->hasMany("App\ProductoCreditos", "id_creditos");
    }

    public function cliente()
    {
        return $this->belongsTo("App\Cliente", "id_cliente");
    }

}
