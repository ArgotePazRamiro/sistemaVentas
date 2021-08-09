<?php



namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = ["codigo","precio","transferencia","efectivo","tarjeta","deposito","transferenciaD","efectivoD","tarjetaD","depositoD"];
    public function productos()
    {
        return $this->hasMany("App\ProductoVendido", "id_venta");
    }
    public function cliente()
    {
        return $this->belongsTo("App\Cliente", "id_cliente");
    }
    public function bancos()
    {
        return $this->belongsTo("App\Bancos", "id_bancos");
    }
    public function users()
    {
        return $this->belongsTo("App\users", "id_users");
    }
    public function productoA()
    {
        return $this->belongsTo("App\ProductoAntiguo", "id_productoA");
    }
    
    
}
