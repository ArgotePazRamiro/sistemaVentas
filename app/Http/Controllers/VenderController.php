<?php

namespace App\Http\Controllers;

use App\Cliente;
use App\Producto;
use App\ProductoVendido;
use App\Venta;
use App\tipoPago;

use Illuminate\Http\Request;

class VenderController extends Controller
{

    public function terminarOCancelarVenta(Request $request)
    {
        if ($request->input("accion") == "terminar") {
            return $this->terminarVenta($request);
        } else {
            return $this->cancelarVenta();
        }
    }

    public function terminarVenta(Request $request)
    {
        // Crear una venta
        $venta = new Venta();
        $venta->id_cliente = $request->input("id_cliente");
        $venta->id_tipoPago = $request->input("id_tipoPago");
        $venta->saveOrFail();
        $idVenta = $venta->id;

        

        $productos = $this->obtenerProductos();

        // Recorrer carrito de compras
        foreach ($productos as $producto) {
            // El producto que se vende...
            $productoVendido = new ProductoVendido();
            
            $productoVendido->fill([
                "id_venta" => $idVenta,
                "nombre" =>$producto->nombre,
                "categoria"=>$producto->categoria,
                "precio_comision"=>$producto->precio_comision,
                "marca"=>$producto->marca,
                "cantidad" =>$producto->cantidad,
                "total" =>$producto->precio_compra,
                "precio" =>$producto->precio_venta,  
                

            ]);
            // Lo guardamos
            $productoVendido->saveOrFail();
            // Y restamos el stock del original
            $productoActualizado = Producto::find($producto->id);
            $productoActualizado->stock -= $productoVendido->cantidad;
            $productoActualizado->saveOrFail();
        } 
        // $this->vaciarProductos();
        return redirect()
            ->route("vender.index")
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
            ->route("vender.index")
            ->with("status", "Venta cancelada");
    }

    public function quitarProductoDeVenta(Request $request)
    {
        $indice = $request->post("indice");
        $productos = $this->obtenerProductos();
        array_splice($productos, $indice, 1);
        $this->guardarProductos($productos);
        return redirect()
            ->route("vender.index");
    }

    public function agregarProductoVenta(Request $request)
    {
        $codigo = $request->post("nombre");
        $producto = Producto::where("nombre", "=", $codigo)->first();
        if (!$producto) {
            return redirect()
                ->route("vender.index")
                ->with("status", "Producto no encontrado");
        }
        $this->agregarProductoACarrito($producto);
        return redirect()
            ->route("vender.index");
    }

    private function agregarProductoACarrito($producto)
    {
        if ($producto->stock<= 0) {
            return redirect()->route("vender.index")
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
                return redirect()->route("vender.index")
                    ->with([
                        "status" => "No se pueden agregar más productos de este tipo, se quedarían sin stock",
                        "tipo" => "danger"
                    ]);
            }
            $productos[$posibleIndice]->cantidad++;
        }
        $this->guardarProductos($productos);
    }

    private function buscarIndiceDeProducto(string $codigo, array &$productos)
    {
        foreach ($productos as $indice => $producto) {
            if ($producto->nombre === $codigo) {
                return $indice;
            }
        }
        return -1;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = 0;
        foreach ($this->obtenerProductos() as $producto) {
            $total += $producto->cantidad * $producto->precio_venta;
        }
        return view("vender.vender",
            [
                "total" => $total,
                "clientes" => Cliente::all(),
                "tipoPagos" => TipoPago::all(), 
            ]);
    }
}
