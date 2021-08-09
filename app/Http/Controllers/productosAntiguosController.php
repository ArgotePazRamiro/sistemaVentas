<?php

namespace App\Http\Controllers;

use App\ProductoAntiguo;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProjectRequest;

class ProductosAntiguosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("productos.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("productos.productoAntiguo.create");
    }
    public function store(CreateProjectRequest $request)
    {
        ProductoAntiguo::create($request->validated());
        return redirect()->route("productos.index")->with("status", "Producto guardado");
    }

    public function show(ProductoAntiguo $producto)
    {
        //
    }

    public function edit(ProductoAntiguo $producto)
    {
        return view("productos.edit", ["producto" => $producto]);
    }
    public function update(CreateProjectRequest $request, ProductoAntiguo $producto)
    {
        $producto->fill($request->validated());
        $producto->saveOrFail();
        return redirect()->route("productos.index")->with("status", "Producto actualizado");
    }

    public function destroy(ProductoAntiguo $producto)
    {
        $producto->delete();
        return redirect()->route("productoss.index")->with("status", "Producto eliminado");
    }
}
