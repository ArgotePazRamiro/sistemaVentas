@extends('layouts.layout')

@section('content')
    <div class="container">

        <div class="section-title">
            <h2>Agregar Banco</h2>
        </div>
        <div class="col col-sm-12 col-lg-12 mt-5mt-lg-8 mx-auto ">
            <form method="POST" action="{{route("bancos.store")}}">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre del Banco</label>
                    <input required autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Nombre">
                </div>
                <div class="form-group">
                    <label class="label">Cuenta</label>
                    <input required autocomplete="off" name="numeroCuenta" class="form-control"
                           type="text" placeholder="numeroCuenta">
                </div>
                <div class="form-group">
                    <label class="label">montoInicial</label>
                    <input required autocomplete="off" name="montoInicial" class="form-control"
                           type="text" placeholder="montoInicial">
                </div>
                <br>
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("bancos.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>
@endsection
