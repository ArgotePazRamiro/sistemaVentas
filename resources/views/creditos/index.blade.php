@extends('layouts.layout')

@section('content')
    <section id="formulario">
        <div class="container">
            <div class="col-12">

                <div class="section-title">
                    <h2 class="display">NUEVA VENTA A CREDITO<i class="bi bi-cart-plus"></i> <a href="{{ route('creditos.show') }}"
                        class="btn btn-warning">CUENTAS POR COBRAR <i class="bi bi-currency-dollar"></i></a></h2>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <form action="{{ route('agregarProductoVent') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <h4 for="nombre">PRODUCTO</h4>
                                <input id="nombre" autocomplete="off" required autofocus name="nombre" type="text"
                                    class="form-control" placeholder="Nombre del Producto">
                            </div>
                        </form>
                    </div>

                </div>
                @if (session('productos') !== null)
                    <br>
                    <div class="table-responsive">
                        <table class="table  table-bordered border-primary table-success table-striped">
                            <thead>
                                <tr>
                                    <th>Nombre Producto</th>
                                    <th>Cantidad</th>
                                    <th>marca</th>
                                    <th>Precio Unitario</th>
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
                                        {{-- <td>Bs. {{ number_format($total, 2) }}</td> --}}
                                        <td>
                                            <form action="{{ route('quitarProductoDeVent') }}" method="post">
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
                    <br>
                    <div class="col-11 col-md-7">
                        <form action="{{ route('terminarOCancelarVent') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <h4 for="id_cliente">CLIENTE <a href="{{ route('clientes.create') }}"
                                        class="btn btn-warning"><i class="bi bi-person-plus-fill"></i></a></h4>

                                <select class="form-select form-select-lg mb-0" aria-label=".form-select-lg example"
                                    name="id_cliente" id="id_cliente">
                                    @foreach ($clientes as $cliente)
                                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                    @endforeach
                                </select>

                            </div>
                            <div class="form-group">
                                <br>
                                <h5>IMEI-NUMERO DE SERIE</h5>
                                <input required autocomplete="off" class="form-control border-2 bg-light shadow-sm" type="text"
                                    name="codigo" id="codigo" placeholder="">
                            </div>
                            <div class="form-group">
                                <br>
                                <h5>aCuenta</h5>
                                <input required autocomplete="off" class="form-control border-2 bg-light shadow-sm" type="text"
                                    name="aCuenta" id="aCuenta" placeholder="">
                            </div>
                            <div class="form-group">
                                <br>
                                <h5>saldo</h5>
                                <input required autocomplete="off" class="form-control border-2 bg-light shadow-sm" type="text"
                                    name="saldo" id="saldo" placeholder="">
                            </div>
                            <div class="form-group">
                                <br>
                                <h5>Primera Fecha Limite</h5>
                                <input required autocomplete="off" class="form-control border-2 bg-light shadow-sm" type="date"
                                    name="fechaLimite" id="fechaLimite" placeholder="">
                            </div>
                            <div class="form-group">
                                <br>
                                <h5>Segunda Fecha Limite</h5>
                                <input autocomplete="off" class="form-control border-2 bg-light shadow-sm" type="date"
                                    name="fecha1" id="fecha1" placeholder="">
                            </div>
                            <div class="form-group">
                                <br>
                                <h5>Tercera Fecha Limite</h5>
                                <input autocomplete="off" class="form-control border-2 bg-light shadow-sm" type="date"
                                    name="fecha2" id="fecha2" placeholder="">
                            </div>
                            @if (session('productos') !== null)
                                <div class="form-group">

                                    <br>

                                    <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                        data-bs-target="#staticBackdrop">
                                        TERMINAR VENTA A CREDITO
                                    </button>
                                    <button name="accion" value="cancelar" type="submit"
                                                        class="btn btn-danger">
                                                        Cancelar Venta
                                    </button>

                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                        data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                        aria-hidden="true">>
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="staticBackdropLabel"><i
                                                            class="bi bi-exclamation-triangle"></i> AVISO<i
                                                            class="bi bi-exclamation-lg"></i><i
                                                            class="bi bi-exclamation-lg"></i><i
                                                            class="bi bi-exclamation-lg"></i></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <h3> SEGURO QUE QUIERE TERMINAR LA VENTA</h3>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Cancelar</button>
                                                    <button name="accion" value="terminar" type="submit"
                                                        class="btn btn-success">
                                                        Terminar Venta
                                                    </button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            @endif
                        </form>
                    </div>
                    {{-- <h2>Total: Bs {{ number_format($total, 2) }}</h2> --}}

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
