@extends('layouts.layout')

@section('content')
    <section id="formulario" class="formulario">
        <div class="container">
            <div class="section-title col-12">
                <h2>VENTAS A CREDITO <i class="fa fa-list"></i></h2>

                <div class="table-responsive">
                    <table class="table table-dark table-bordered border-light table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Cliente</th>
                                <th>Fecha De Compra</th>
                                <th>EMEI-Numero de Serie</th>
                                <th>Saldo</th>
                                <th>aCuenta</th>
                                <th>Total a Pagar</th>
                                <th>fechaLimite</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($creditos as $credito)
                                <tr>
                                    <td>{{ $credito->cliente->nombre }}</td>
                                    <td>{{ $credito->created_at }}</td>
                                    <td>{{ $credito->codigo }}</td>
                                    <td>{{ $credito->saldo }}</td>
                                    <td>{{ $credito->aCuenta }}</td>
                                    <td>Bs. {{ number_format($credito->total, 2) }}</td>
                                    <td>{{ $credito->fechaLimite }}</td>

                                    <td>
                                        <a class="btn btn-warning" href="{{ route('clientes.edit', [$credito]) }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('ventas.destroy', [$credito]) }}" method="post">
                                            @method("delete")
                                            @csrf
                                            <a href="" type="submit" class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
