<?php

namespace App\Http\Controllers;

use App\Productos;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProjectRequest;

class productosController extends Controller
{
    public function index(){
        return view('administrador.producto.index',[
            'producto'=>$producto = Productos::latest()->paginate(10)
        ]);
    }
    public function show(Productos $producto)
    {
        return view('administrador.producto.show',[
            'producto'=>$producto
        ]);
    }
    public function create()
    {
        return view('administrador.producto.create',[
            'producto'=> new Productos
        ]);
    }

    public function store(CreateProjectRequest $request)
    {

        Productos::create($request->validated());
        return redirect()->route('producto.index')->with('status','El proyecto fue creado con exito');

    }
    public function edit(Productos $producto){

        return view('administrador.producto.edit',[
            'producto'=> $producto
        ]);
    }
    public function update(Productos $producto)
    {

        $producto->update([
            'nombre'=> request('nombre'),
            'precioUnitario'=> request('precioUnitario'),
            'stock'=> request('stock'),
            'categoria'=> request('categoria'),
            'precioComision'=> request('precioComision'),
            'estado'=> '1'
        ]);

        return redirect()->route('producto.index', $producto);    } 
    
    public function destroy(Productos $producto)
    {
        $producto->delete();
        return redirect()->route('producto.index');

    }
}
