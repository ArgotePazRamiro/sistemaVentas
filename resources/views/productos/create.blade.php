@extends('layouts.layout')


@section('content')
<section id="formulario">
     <div class="container">
        {{-- <div class="row"> --}}
            <div class="col-12 col-sm-10 col-lg-9 mx-auto">

                <div class="section-title">
                    <h2>Agregar producto</h2>
                </div>
                @include('partials.validation-errors')
                <form method="POST" action="{{ route('productos.store') }}" class="bg-white py-3 px-4 shadow rounded">
                    @csrf
                    <div class="form-group">
                        <label class="title">Nombre</label>
                        <input required autocomplete="off" class="form-control border-2 bg-light shadow-sm" type="text"
                            name="nombre" id="nombre" value="{{ old('nombre') }}" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label class="label">Categoria</label>
                        <input required autocomplete="off"
                            value="{{ old('categoria') }}"  name="categoria" class="form-control" type="text"
                            placeholder="Categoria">
                    </div>
                    <div class="form-group">
                        <label class="label">Codigo</label>
                        <input required autocomplete="off"
                        value="{{ old('codigo') }}" name="codigo" class="form-control" type="text"
                            placeholder="precio Comision">
                    </div>
                    <div class="form-group">
                        <label class="label">Marca</label>
                        <input required autocomplete="off"
                        value="{{ old('marca') }}" name="marca" class="form-control" type="text"
                            placeholder="Marca">
                    </div>
                    <div class="form-group">
                        <label class="label">Precio de compra</label>
                        <input required autocomplete="off"
                        value="{{ old('precio_compra') }}" name="precio_compra" class="form-control" type="decimal(9,2)"
                            placeholder="Precio de compra">
                    </div>
                    <div class="form-group">
                        <label class="label">Precio de venta</label>
                        <input required autocomplete="off"
                        value="{{ old('precio_venta') }}" name="precio_venta" class="form-control" type="decimal(9,2)"
                            placeholder="Precio de venta">
                    </div>
                    <div class="form-group">
                        <label class="label">Stock</label>
                        <input required autocomplete="off"
                        value="{{ old('stock') }}" name="stock" class="form-control" type="numeric"
                            placeholder="Stock">
                    
                    </div>

                    
                    <button class="btn btn-success">Guardar</button>
                    <a class="btn btn-primary" href="{{ route('productos.index') }}">Volver al listado</a>

                </form>
            </div>
        {{-- </div> --}}
    </div>
</section>

@endsection
