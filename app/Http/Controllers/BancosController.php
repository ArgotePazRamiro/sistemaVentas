<?php

namespace App\Http\Controllers;

use App\Bancos;
use Illuminate\Http\Request;

class BancosController extends Controller
{
    
    public function index()
    {
        return view("bancos.index", ["bancos" => Bancos::all()]);
    }

    public function create()
    {
        return view("bancos.create");
    }

    public function store(Request $request)
    {
        $bancos = new Bancos($request->input());
        $bancos->saveOrFail();
        return redirect()->route("bancos.index")->with("status", "Banco guardado");
    }

    public function show(Bancos $bancos)
    {
        //
    }

    public function edit(Bancos $bancos)
    {
        return view("bancos.edit", ["bancos" => $bancos,
        ]);
    }

    public function update(Request $request, Bancos $bancos)
    {
        $bancos->fill($request->input());
        $bancos->saveOrFail();
        return redirect()->route("bancos.index")->with("status", "tipoPago actualizado");
    }

    public function destroy(Bancos $bancos)
    {
        $bancos->delete();
        return redirect()->route("bancos.index")->with("status", "tipoPago eliminado");
    }
}
