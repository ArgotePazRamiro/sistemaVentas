@extends('layouts.layout')

@section('content')

    <section id="contact" class="contact">
        <div class="container">
            <div class="col-12">
                <h1>Productos <i class="fa fa-box"></i></h1>
                <a href="{{ route('productos.create') }}" class="btn btn-success mb-2">Agregar</a>

                <div class="table-responsive">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Categoria</th>
                                <th>Marca</th>
                                <th>Precio de compra</th>
                                <th>Precio de venta</th>
                                {{-- <th>Ganancia</th> --}}
                                <th>Codigo</th>

                                <th>Stock</th>

                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>
                                    <td>{{ $producto->nombre }}</td>
                                    <td>{{ $producto->categoria }}</td>
                                    <td>{{ $producto->marca }}</td>
                                    <td>{{ $producto->precio_compra }}</td>
                                    <td>{{ $producto->precio_venta }}</td>
                                    {{-- <td>{{$producto->precio_venta - $producto->precio_compra}}</td> --}}
                                    <td>{{$producto->codigo}}</td>
                                    <td>{{ $producto->stock }} </td>
                                    <td>

                                        <a class="btn btn-warning" href="{{ route('productos.edit', [$producto]) }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            <i class="bi bi-trash"></i>
                                        </button>

                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">>
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header"
                                                        style="color: rgb(255, 255, 255); background:rgb(53, 0, 0)">
                                                        <h5 class="modal-title" id="staticBackdropLabel"><i
                                                                class="bi bi-exclamation-triangle"></i> AVISO<i
                                                                class="bi bi-exclamation-lg"></i><i
                                                                class="bi bi-exclamation-lg"></i><i
                                                                class="bi bi-exclamation-lg"></i></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h3 style="color: black"> SEGURO QUE QUIERE ELIMINAR EL PRODUCTO
                                                        </h3>
                                                        <h6 style="color: rgb(48, 48, 48)"> Si lo elimina no podra recuperar
                                                            los datos</h6>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cancelar</button>
                                                        <form action="{{ route('productos.destroy', [$producto]) }}"
                                                            method="post">
                                                            @method("delete")
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="bi bi-trash"></i>ELIMINAR
                                                            </button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $productos->links() }}
                </div>
            </div>

            <div class="col-12">
                <h1>Productos Antiguos<i class="fa fa-box"></i></h1>
                <a href="{{ route('productoAntiguo.create') }}" class="btn btn-success mb-2">Agregar</a>

                <div class="table-responsive">
                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Categoria</th>
                                <th>Marca</th>

                                <th>Precio de compra</th>
                                <th>Precio de venta</th>
                                {{-- <th>Ganancia</th> --}}
                                <td>Codigo</td>


                                <th>Stock</th>

                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productosA as $productoA)
                                <tr>
                                    <td>{{ $productoA->nombre }}</td>
                                    <td>{{ $productoA->categoria }}</td>
                                    <td>{{ $productoA->marca }}</td>

                                    <td>{{ $productoA->precio_compra }}</td>
                                    <td>{{ $productoA->precio_venta }}</td>
                                    <td>{{$producto->codigo}}</td>

                                    {{-- <td>{{$producto->precio_venta - $producto->precio_compra}}</td> --}}


                                    <td>{{ $productoA->stock }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('productoAntiguo.create', [$productoA]) }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">>
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header"
                                                        style="color: rgb(255, 255, 255); background:rgb(53, 0, 0)">
                                                        <h5 class="modal-title" id="staticBackdropLabel"><i
                                                                class="bi bi-exclamation-triangle"></i> AVISO<i
                                                                class="bi bi-exclamation-lg"></i><i
                                                                class="bi bi-exclamation-lg"></i><i
                                                                class="bi bi-exclamation-lg"></i></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h3 style="color: black"> SEGURO QUE QUIERES ELIMINAR EL PRODUCTO
                                                        </h3>
                                                        <h6 style="color: rgb(48, 48, 48)"> Si lo elimina no podra recuperar
                                                            los datos</h6>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cancelar</button>
                                                        <form action="{{ route('productoAntiguo.create', [$productoA]) }}"
                                                            method="post">
                                                            @method("delete")
                                                            @csrf
                                                            <button type="submit" class="btn btn-danger">
                                                                <i class="bi bi-trash"></i>ELIMINAR
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $productos->links() }}
                </div>
            </div>
        </div>

    </section><!-- End Section -->

@endsection
