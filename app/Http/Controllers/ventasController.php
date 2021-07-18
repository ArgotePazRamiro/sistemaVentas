<?php

namespace App\Http\Controllers;

use App\Ventas;
use App\users;
use App\Productos;
use App\Clientes;



use Illuminate\Http\Request;

class ventasController extends Controller
{
    public function index(){
        return view('ventas.index',[
            'ventas'=>$ventas = Ventas::latest()->paginate(10)
        ]);
    }
    public function show(Ventas $ventas)
    {
        return view('ventas.show',[
            'ventas'=>$ventas
        ]);
    }
    public function create()
    {
        return view('ventas.create',[
            'ventas'=> new Ventas
        ]);
    }

    public function store(Request $request)
    {
        Ventas::craete($request->validated());
        return redirect()->route('ventas.index')->with('status','Se Guardo Exitosamente');
    }
    public function edit(Ventas $ventas){

        return view('ventas.edit',[
            'ventas'=> $ventas
        ]);
    }
    public function update(Ventas $ventas)
    {

        $ventas->update([
            'nombre'=> request('nombre'),
            'aPaterno'=> request('aPaterno'),
            'aMaterno'=> request('aMaterno'),
            'ci'=> request('ci'),
            'celular'=> request('celular'),
            'usuario'=> request('usuario'),
            'password'=> request('password'),
            'rol'=> 'null',
            'estado'=> '1'
        ]);

        return redirect()->route('ventas.index', $ventas)->with('status','Se Actualizo Exitosamente');
    }
    
    public function destroy(Ventas $ventas)
    {
        $ventas->delete();
        return redirect()->route('ventas.index')->with('status','Se Elimino Exitosamente');

    }
}
