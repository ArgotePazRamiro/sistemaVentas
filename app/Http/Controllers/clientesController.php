<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;

class clientesController extends Controller
{
    public function index(){
        return view('cliente.index',[
            'cliente'=>$cliente = Clientes::latest()->paginate(10)
        ]);
    }
    public function show(Clientes $cliente)
    {
        return view('cliente.show',[
            'cliente'=>$cliente
        ]);
    }
    public function create()
    {
        return view('cliente.create',[
            'cliente'=> new Clientes
        ]);
    }

    public function store()
    {
        $message = Clientes:: create([
            'nombre'=> request('nombre'),
            'aPaterno'=> request('aPaterno'),
            'aMaterno'=> request('aMaterno'),
            'ci'=> request('ci'),
            'celular'=> request('celular')
            
        ]);
        return redirect()->route('cliente.index');
    }
    public function edit(Clientes $cliente){

        return view('cliente.edit',[
            'cliente'=> $cliente
        ]);
    }
    public function update(Clientes $cliente)
    {

        $cliente->update([
            'nombre'=> request('nombre'),
            'aPaterno'=> request('aPaterno'),
            'aMaterno'=> request('aMaterno'),
            'ci'=> request('ci'),
            'celular'=> request('celular')
        ]);

        return redirect()->route('cliente.index', $cliente);    } 
    
    public function destroy(Clientes $cliente)
    {
        $cliente->delete();
        return redirect()->route('cliente.index');

    }
}
