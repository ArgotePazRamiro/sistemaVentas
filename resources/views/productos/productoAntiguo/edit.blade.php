@extends('layouts.layout')


@section('content')
<section id="contact" class="contact">
    <div class="row">
        <div class="col-12">
            <h1>Editar producto</h1>
            <form method="POST" action="{{route("productos.update", [$producto])}}">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required value="{{$producto->nombre}}" autocomplete="off" name="nombre"
                           class="form-control"
                           type="text" placeholder="NOMBRE">
                </div>
                <div class="form-group">
                    <label class="label">Categoria</label>
                    <input required value="{{$producto->categoria}}" autocomplete="off" name="categoria"
                           class="form-control"
                           type="text" placeholder="Categoria">
                </div>
                <div class="form-group">
                    <label class="label">Marca</label>
                    <input required value="{{$producto->marca}}" autocomplete="off" name="marca"
                           class="form-control"
                           type="text" placeholder="marca">
                </div>
                <div class="form-group">
                    <label class="label">Precio de compra</label>
                    <input required value="{{$producto->precio_compra}}" autocomplete="off" name="precio_compra"
                           class="form-control"
                           type="decimal(9,2)" placeholder="Precio de compra">
                </div>
                <div class="form-group">
                    <label class="label">Precio de venta</label>
                    <input required value="{{$producto->precio_venta}}" autocomplete="off" name="precio_venta"
                           class="form-control"
                           type="decimal(9,2)" placeholder="Precio de venta">
                </div>
                <div class="form-group">
                    <label class="label">stock</label>
                    <input required value="{{$producto->stock}}" autocomplete="off" name="stock"
                           class="form-control"
                           type="numeric" placeholder="stock">
                </div>
                <div class="form-group">
                    <label class="label">Precio Comision</label>
                    <input required value="{{$producto->precio_comision}}" autocomplete="off" name="precio_comision"
                           class="form-control"
                           type="decimal(9,2)" placeholder="precio comision">
                </div>
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("productos.index")}}">Volver</a>
            </form>
        </div>
    </div>

</section>
@endsection
