<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creditos extends Model
{
    protected $fillable = ["aCuenta","saldo","codigo","fechaLimite","couta1","couta2","couta3","couta4","couta5","couta6","fecha1","fecha2","fecha3","fecha4","fecha5","fecha6"];
    public function productos()
    {
        return $this->hasMany("App\ProductoCreditos", "id_creditos");
    }

    public function cliente()
    {
        return $this->belongsTo("App\Cliente", "id_cliente");
    }

}
