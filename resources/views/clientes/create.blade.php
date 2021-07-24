@extends('layouts.layout')


@section('content')
    <section id="formulario" class="formulario">
        <div class="container">
            <div class="section-title">
                <h2>Agregar Cliente <i class="bi bi-people-fill"></i></h2>
            </div>
            <form method="POST" action="{{ route('clientes.store') }}">
                @csrf
                <div class="row">
                <div class="form-group">
                    <h4>Nombre</h4>
                    <input required autocomplete="off" name="nombre" 
                    class="form-control border-1 bg-secondary shadow-sm" 
                    type="text" placeholder="Nombre">
                </div>
                </div>
                <div class="form-group">
                    <h4>Apellidos</h4>
                    <input required autocomplete="off" name="apellidos" 
                    class="form-control border-1 bg-secondary shadow-sm" type="text"
                        placeholder="Apellidos">
                </div>
                <div class="row">
                <div class="form-group col-md-6">
                    <h4>Carnet de Identidad</h4>
                    <input required autocomplete="off" name="ci" 
                    class="form-control border-1 bg-secondary shadow-sm" type="text"
                        placeholder="Carnet de Identidad">
                </div>
                <div class="form-group col-md-6">
                    <h4 >Teléfono</h4>
                    <input required autocomplete="off" name="telefono" 
                        class="form-control border-1 bg-secondary shadow-sm" type="text"
                        placeholder="Teléfono">
                    </div>
                </div>


                <div class="text-center">
                    <br>
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{ route('clientes.index') }}">Volver al listado</a>
                </div>
            </form>
        </div>

    </section>
@endsection
