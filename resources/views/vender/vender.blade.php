@extends('layouts.layout')

@section('content')
    <section class="">
        <div class="container">
            <div class="col-12">

                <div class="section-title">
                    <h2 class="display">NUEVA VENTA <i class="bi bi-cart-plus"></i></h2>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <form action="{{ route('agregarProductoVenta') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <h4 for="nombre" >PRODUCTO</h4>
                                <input id="nombre" autocomplete="off" required autofocus name="nombre" type="text"
                                    class="form-control" placeholder="Nombre del Producto">
                            </div>
                        </form>
                    </div>
                    <div class="col-11 col-md-6">
                        <form action="{{ route('terminarOCancelarVenta') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <h4 for="id_cliente" >CLIENTE</h4>
                                <select required class="form-select form-select-lg mb-0"
                                    aria-label=".form-select-lg example" name="id_cliente" id="id_cliente">
                                    @foreach ($clientes as $cliente)
                                        <option selected>SELECCIONE CLIENTE......</option>
                                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <br>
                                <h5>IMEI-NUMERO DE SERIE</h5>
                                <input autocomplete="off" class="form-control border-2 bg-light shadow-sm" type="text"
                                    name="codigo" id="codigo" placeholder="">
                            </div>


                            @if (session('productos') !== null)
                                <div class="form-group">
                                    <br>
                                    <button name="accion" value="terminar" type="submit" class="btn btn-success">Terminar
                                        venta
                                    </button>
                                    <button name="accion" value="cancelar" type="submit" class="btn btn-danger">Cancelar
                                        venta
                                    </button>

                                </div>
                            @endif
                        </form>
                    </div>



                    
                </div>
                @if (session('productos') !== null)
                    <br>
                    <h2>Total: Bs {{ number_format($total, 2) }}</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th>Nombre Producto</th>
                                    <th>Cantidad</th>
                                    <th>marca</th>
                                    <th>Precio Unitario</th>
                                    <th>Precio Total</th>
                                    <th>Quitar</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach (session('productos') as $producto)
                                    <tr>
                                        <td>{{ $producto->nombre }}</td>
                                        <td>{{ $producto->cantidad }}</td>

                                        <td>{{ $producto->marca }}</td>
                                        <td>Bs.{{ number_format($producto->precio_venta, 2) }}</td>
                                        <td>Bs. {{ number_format($total, 2) }}</td>

                                        <td>
                                            <form action="{{ route('quitarProductoDeVenta') }}" method="post">
                                                @method("delete")
                                                @csrf
                                                <input type="hidden" name="indice" value="{{ $loop->index }}">
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
                @else
                    <h2>Aquí aparecerán los productos de la venta
                        <br>
                        Escribe el <span><strong><i> Nombre del Producto </i></strong></span> y presiona Enter
                    </h2>
                @endif
            </div>
        </div>

    </section>

@endsection
