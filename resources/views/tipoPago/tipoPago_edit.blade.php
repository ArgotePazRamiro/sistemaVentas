@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Editar TIpo de pago</h1>
            <form method="POST" action="{{route("tipoPago.update", [$tipoPago])}}">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="label">Tipo de Pagos</label>
                    <input required value="{{$tipoPago->tipoPago}}" autocomplete="off" name="tipoPago"
                           class="form-control"
                           type="text" placeholder="tipo de Pago">
                </div>
                
                
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("tipoPago.index")}}">Volver</a>
            </form>
        </div>
    </div>
@endsection
