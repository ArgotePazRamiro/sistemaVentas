<?php

namespace App\Http\Controllers;

use App\Producto;
use App\ProductoAntiguo;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProjectRequest;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("productos.index", ["productos" => Producto::all(),"productosA" => ProductoAntiguo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("productos.create");
    }

    public function store(CreateProjectRequest $request)
    {
        Producto::create($request->validated());
        return redirect()->route("productos.index")->with("status", "Producto guardado");
    }

    public function show(Producto $producto)
    {
        //
    }

    public function edit(Producto $producto)
    {
        return view("productos.edit", ["producto" => $producto]);
    }

    public function update(CreateProjectRequest $request, Producto $producto)
    {
        $producto->fill($request->validated());
        $producto->saveOrFail();
        return redirect()->route("productos.index")->with("status", "Producto actualizado");
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route("productos.index")->with("status", "Producto eliminado");
    }
}
