@extends('layouts.layout')

@section('content')

    <section id="contact" class="contact">
        <div class="row">
            <div class="col-12">
                <h1>Productos <i class="fa fa-box"></i></h1>
                <a href="{{route("productos.create")}}" class="btn btn-success mb-2">Agregar</a>
                
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Categoria</th>
                            <th>Marca</th>
                            <th>Codigo</th>
                            <th>Precio de compra</th>
                            <th>Precio de venta</th>
                            <th>Precio Comision</th>
                            <th>Stock</th>
    
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($productos as $producto)
                            <tr>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->categoria}}</td>
                                <td>{{$producto->marca}}</td>
                                <td>{{$producto->codigo}}</td>
                                <td>{{$producto->precio_compra}}</td>
                                <td>{{$producto->precio_venta}}</td>
                                <td>{{$producto->precio_venta - $producto->precio_compra}}</td>
                                <td>{{$producto->stock}}</td>
                                <td>
                                    <a class="btn btn-warning" href="{{route("productos.edit",[$producto])}}">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route("productos.destroy", [$producto])}}" method="post">
                                        @method("delete")
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    </section><!-- End Section -->

@endsection
