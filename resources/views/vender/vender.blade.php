@extends('layouts.layout')

@section('content')
    <section class="">
        <div class="container">
            <div class="col-12">

                <div class="section-title">
                    <h2 class="display">NUEVA VENTA <i class="bi bi-cart-plus"></i></h2>
                </div>
                <div class="container">
                    <div class="row align-items-start">
                        <div class="col-6">
                            <form action="{{ route('agregarProductoVenta') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <h4 for="nombre">PRODUCTO</h4>
                                    <input id="nombre" autocomplete="off" required autofocus name="nombre" type="text"
                                        class="form-control" placeholder="Nombre del Producto">
                                </div>
                            </form>
                        </div>
                        <div class="col-6">
                            <form action="{{ route('terminarOCancelarVenta') }}" method="POST">
                                @csrf
                                
                                    <div class="form-group">

                                        <h4 for="id_cliente">CLIENTE <a href="{{ route('clientes.create') }}"
                                                class="btn btn-warning"><i class="bi bi-person-plus-fill"></i></a></h4>
                                        <select required class="form-select form-select-lg mb-0"
                                            aria-label=".form-select-lg example" name="id_cliente" id="id_cliente"
                                            placeholder="asdasd">
                                            @foreach ($clientes as $cliente)
                                                <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">

                                        <h4 for="id_cliente">USUARIO</h4>
                                        <select required class="form-select border-info form-select-lg mb-0"
                                            aria-label=".form-select-lg example" name="id_users" id="id_users"
                                            placeholder="asdasd">
                                            @foreach ($users as $user)
                                                <option value="{{ $user->id }}">{{ $user->nombre }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <h4 for="id_bancos">BANCOS </h4>
                                        <select required class="form-select border-warning form-select-lg mb-0"
                                            aria-label=".form-select-lg example" name="id_bancos" id="id_bancos"
                                            placeholder="asdasd">
                                            @foreach ($bancos as $banco)
                                                <option value="{{ $banco->id }}">{{ $banco->nombre}}-{{$banco->numeroCuenta}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="form-group">
                                        <br>
                                        <h5>IMEI-NUMERO DE SERIE</h5>
                                        <input autocomplete="off"
                                            class="form-control border-1 border-dark bg-light shadow-sm" type="text"
                                            name="codigo" id="codigo" placeholder="">
                                    </div>
                                </div>
                                
                                

                                <div class="container">
                                    <div class="row justify-content-start">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <br>
                                                    <h5>EFECTIVO $ <span class="dolar">(Dolar)</span></h5>
                                                    <input autocomplete="off"
                                                        class="form-control border-1 border-success bg-light shadow-sm"
                                                        type="text" name="efectivoD" id="efectivoD" placeholder="Dolar $">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <br>
                                                    <h5>TRANSFERENCIA $</h5>
                                                    <input autocomplete="off"
                                                        class="form-control border-1 border-success bg-light shadow-sm"
                                                        type="text" name="transferenciaD" id="transferenciaD"
                                                        placeholder="Dolar $">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <br>
                                                    <h5>TARJETA $ <span class="dolar">(Dolar)</span></h5>
                                                    <input autocomplete="off"
                                                        class="form-control border-1 border-success bg-light shadow-sm"
                                                        type="text" name="tarjetaD" id="tarjetaD" placeholder="Dolar $">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <br>
                                                    <h5>DEPOSITO $ <span class="dolar">(Dolar)</span></h5>
                                                    <input autocomplete="off"
                                                        class="form-control border-1 border-success bg-light shadow-sm"
                                                        type="text" name="depositoD" id="depositoD" placeholder="Dolar $">
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <br>
                                                    <h5>EFECTIVO Bs.</h5>
                                                    <input autocomplete="off"
                                                        class="form-control border-1 border-info bg-light shadow-sm"
                                                        type="text" name="efectivo" id="efectivo"
                                                        placeholder="Bolivianos Bs.">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <br>
                                                    <h5>TRANSFERENCIA Bs.</h5>
                                                    <input autocomplete="off"
                                                        class="form-control border-1 border-info bg-light shadow-sm"
                                                        type="text" name="transferencia" id="transferencia"
                                                        placeholder="Bolivianos Bs.">
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <br>
                                                    <h5>TARJETA Bs.</h5>
                                                    <input autocomplete="off"
                                                        class="form-control border-1 border-info bg-light shadow-sm"
                                                        type="text" name="tarjeta" id="tarjeta"
                                                        placeholder="Bolivianos Bs.">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <br>
                                                    <h5>DEPOSITO Bs.</h5>
                                                    <input autocomplete="off"
                                                        class="form-control border-1 border-info bg-light shadow-sm"
                                                        type="text" name="deposito" id="deposito"
                                                        placeholder="Bolivianos Bs.">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @if (session('productos') !== null)
                                    <div class="form-group">
                                        <br>

                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            TERMINAR VENTA A CREDITO
                                        </button>
                                        <button name="accion" value="cancelar" type="submit" class="btn btn-danger">
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
                </div>








                @if (session('productos') !== null)
                    <br>
                    <h2>Total: Bs {{ number_format($total, 2) }}</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-dark table-bordered border-warning">
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
