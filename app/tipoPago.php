<?php



namespace App;

use Illuminate\Database\Eloquent\Model;
use app\ProductoVendido;

class tipoPago extends Model
{

    protected $table = "tipo_pago";
    protected $fillable = ["id","tipoPago"];
    
    
}
