<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Producto;
use App\ProductoCreditos;
use App\Creditos;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class CreditosController extends Controller
{
    
    

    public function terminarOCancelarVent(Request $request)
    {
        if ($request->input("accion") == "terminar") {
            return $this->terminarVent($request);
        } else {
            return $this->cancelarVenta();
        }
    }

    public function terminarVent(Request $request)
    {
        // Crear una venta
        $creditos = new Creditos();
        $creditos->id_cliente = $request->input("id_cliente");
        $creditos->codigo = $request->input("codigo");
        $creditos->saldo = $request->input("saldo");
        $creditos->aCuenta = $request->input("aCuenta");
        $creditos->fechaLimite = $request->input("fechaLimite");
        $creditos->saveOrFail();
        $idCreditos = $creditos->id;
        $productos = $this->obtenerProductos();

        // Recorrer carrito de compras
        foreach ($productos as $producto) {
            // El producto que se vende...
            $productoCredito = new ProductoCreditos();
            $productoCredito->fill([
                "id_creditos" => $idCreditos,
                "nombre" =>$producto->nombre,
                "categoria"=>$producto->categoria,
                "precio_comision"=>$producto->precio_comision,
                "marca"=>$producto->marca,
                "cantidad" =>$producto->cantidad,
                "total" =>$producto->precio_compra,
                "precio" =>$producto->precio_venta,  
            ]);
            // Lo guardamos
            $productoCredito->saveOrFail();
            // Y restamos el stock del original
            $productoActualizado = Producto::find($producto->id);
            $productoActualizado->stock -= $productoCredito->cantidad;
            $productoActualizado->saveOrFail();
        } 
        $this->vaciarProductos();
        return redirect()
            ->route("creditos.show")
            ->with("status", "Venta terminada"); 
    }

    private function obtenerProductos()
    {
        $productos = session("productos");
        if (!$productos) {
            $productos = [];
        }
        return $productos;
    }

    private function vaciarProductos()
    {
        $this->guardarProductos(null);
    }

    private function guardarProductos($productos)
    {
        session(["productos" => $productos,
        ]);
    }

    public function cancelarVenta()
    {
        $this->vaciarProductos();
        return redirect()
            ->route("creditos.index")
            ->with("status", "Venta cancelada");
    }

    public function quitarProductoDeVent(Request $request)
    {
        $indice = $request->post("indice");
        $productos = $this->obtenerProductos();
        array_splice($productos, $indice, 1);
        $this->guardarProductos($productos);
        return redirect()
            ->route("creditos.index");
    }

    public function agregarProductoVent(Request $request)
    {
        $nombre = $request->post("nombre");
        $producto = Producto::where("nombre", "=", $nombre)->first();
        if (!$producto) {
            return redirect()
                ->route("creditos.index")
                ->with("status", "Producto no encontrado");
        }
        $this->agregarProductoACarrito($producto);
        return redirect()
            ->route("creditos.index");
    }

    private function agregarProductoACarrito($producto)
    {
        if ($producto->stock<=0) {
            return redirect()->route("creditos.index")
                ->with([
                    "status" => "No hay stock del producto",
                    "tipo" => "danger"
                ]);
        }
        $productos = $this->obtenerProductos();
        $posibleIndice = $this->buscarIndiceDeProducto($producto->nombre, $productos);
        // Es decir, producto no fue encontrado
        if ($posibleIndice === -1) {
            $producto->cantidad = 1;
            array_push($productos, $producto);
        } else {
            if ($productos[$posibleIndice]->cantidad + 1 > $producto->stock) {
                return redirect()->route("creditos.index")
                    ->with([
                        "status" => "No se pueden agregar más productos de este tipo, se quedarían sin stock",
                        "tipo" => "danger"
                    ]);
            }
            $productos[$posibleIndice]->cantidad++;
        }
        $this->guardarProductos($productos);
    }

    private function buscarIndiceDeProducto(string $nombre, array &$productos)
    {
        foreach ($productos as $indice => $producto) {
            if ($producto->nombre === $nombre) {
                return $indice;
            }
        }
        return -1;
    }
    public function index()
    {
        return view("creditos.index",
            [
                "clientes" => Cliente::all(),
                /* "productos" => Producto::all(), */

            ]);
    }
    public function show(Creditos $creditos){

        /* $total = 0;
        foreach ($creditos->productos as $producto) {
            $total += $producto->cantidad * $producto->precio;
        } */
        $ventasConTotales = Creditos::join("productos_creditos", "productos_creditos.id_creditos", "=", "creditos.id") 
            ->select("creditos.*",DB::raw("sum(productos_creditos.cantidad * productos_creditos.precio) as total"))
            ->groupBy("creditos.id", "creditos.created_at", "creditos.id_cliente","creditos.codigo","creditos.saldo","creditos.aCuenta","creditos.fechaLimite")
            ->get();
        return view("creditos.show", ["creditos" => $ventasConTotales/* ,"total" => $total */]);
        
    }
}
