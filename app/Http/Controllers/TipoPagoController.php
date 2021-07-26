<?php

namespace App\Http\Controllers;

use App\TipoPago;
use Illuminate\Http\Request;

class TipoPagoController extends Controller
{
    
    public function index()
    {
        return view("tipoPago.tipoPago_index", ["tipoPago" => TipoPago::all()]);
    }

    public function create()
    {
        return view("tipoPago.tipoPago_create");
    }

    public function store(Request $request)
    {
        $tipoPago = new TipoPago($request->input());
        $tipoPago->saveOrFail();
        return redirect()->route("tipoPago.index")->with("mensaje", "tipoPago guardado");
    }

    public function show(TipoPago $tipoPago)
    {
        //
    }

    public function edit(TipoPago $tipoPago)
    {
        return view("tipoPago.tipoPago_edit", ["tipoPago" => $tipoPago,
        ]);
    }

    public function update(Request $request, TipoPago $tipoPago)
    {
        $tipoPago->fill($request->input());
        $tipoPago->saveOrFail();
        return redirect()->route("tipoPago.index")->with("mensaje", "tipoPago actualizado");
    }

    public function destroy(TipoPago $tipoPago)
    {
        $tipoPago->delete();
        return redirect()->route("tipoPago.index")->with("mensaje", "tipoPago eliminado");
    }
}
