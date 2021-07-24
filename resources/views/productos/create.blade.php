@extends('layouts.layout')


@section('content')
<div class="row">
    <div class="col-12">
        <h1>Agregar producto</h1>
        <form method="POST" action="{{route("productos.store")}}">
            @csrf
            <div class="form-group">
                <label class="label">Nombre</label>
                <input required autocomplete="off" name="nombre" class="form-control"
                       type="text" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label class="label">Categoria</label>
                <input required autocomplete="off" name="categoria" class="form-control"
                       type="text" placeholder="Categoria">
            </div>
            <div class="form-group">
                <label class="label">Marca</label>
                <input required autocomplete="off" name="marca" class="form-control"
                       type="text" placeholder="Marca">
            </div>
            <div class="form-group">
                <label class="label">Codigo</label>
                <input required autocomplete="off" name="codigo" class="form-control"
                       type="text" placeholder="Codigo">
            </div>
            <div class="form-group">
                <label class="label">Precio de compra</label>
                <input required autocomplete="off" name="precio_compra" class="form-control"
                       type="decimal(9,2)" placeholder="Precio de compra">
            </div>
            <div class="form-group">
                <label class="label">Precio de venta</label>
                <input required autocomplete="off" name="precio_venta" class="form-control"
                       type="decimal(9,2)" placeholder="Precio de venta">
            </div>
            <div class="form-group">
                <label class="label">Precio Comision</label>
                <input required autocomplete="off" name="precio_comision" class="form-control"
                       type="numeric" placeholder="precio Comision">
            </div>
            <div class="form-group">
                <label class="label">Stock</label>
                <input required autocomplete="off" name="stock" class="form-control"
                       type="numeric" placeholder="Stock">
            </div>

            
            <button class="btn btn-success">Guardar</button>
            <a class="btn btn-primary" href="{{route("productos.index")}}">Volver al listado</a>
        </form>
    </div>
</div>
@endsection
