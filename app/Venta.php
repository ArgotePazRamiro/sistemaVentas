<?php



namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable = ["codigo","transferencia","efectivo","tarjeta","deposito"];
    public function productos()
    {
        return $this->hasMany("App\ProductoVendido", "id_venta");
    }

    public function cliente()
    {
        return $this->belongsTo("App\Cliente", "id_cliente");
    }
    public function tipoPago()
    {
        return $this->belongsTo("App\TipoPago", "id_tipoPago");
    }
    
}
