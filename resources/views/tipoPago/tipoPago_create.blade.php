@extends('layouts.layout')

@section('content')
    <div class="row">
        <div class="col-12">
            <h1>Agregar TipoPago</h1>
            <form method="POST" action="{{route("tipoPago.store")}}">
                @csrf
                <div class="form-group">
                    <label class="label">tipoPago</label>
                    <input required autocomplete="off" name="tipoPago" class="form-control"
                           type="text" placeholder="tipoPago">
                </div>
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("tipoPago.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>
@endsection
