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
                                <th>IMEI-Numero de Serie</th>
                                {{-- <th>Dejo Pagado</th> --}}
                                <th class="table-danger">Debe</th>
                                <th class="">Saldo</th>
                                <th>Total a Pagar</th>
                                <th>fechaLimite</th>
                                <th>Editar</th>
                                <th>Ver</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($creditos as $credito)
                                <tr>
                                    <td>{{ $credito->cliente->nombre }}</td>
                                    <td>{{ $credito->created_at }}</td>
                                    <td>{{ $credito->codigo }}</td>
                                    {{-- <td>{{ $credito->aCuenta  }}</td> --}}
                                    
                                    <td class="">{{ $credito->total - $credito->aCuenta - $credito->couta1- $credito->couta2- $credito->couta3- $credito->couta4- $credito->couta5- $credito->couta6 }}</td>
                                    <td>
                                        {{ $credito->saldo =($credito->total) -($credito->total - $credito->aCuenta - $credito->couta1- $credito->couta2- $credito->couta3- $credito->couta4- $credito->couta5- $credito->couta6)}}
                                    </td>
                                    <td>Bs. {{ number_format($credito->total, 2) }}</td>
                                    <td>{{ $credito->fechaLimite }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="{{ route('creditos.edit', [$credito]) }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <a class="btn btn-success" {{-- href="{{ route('clientes.edit') }}" --}}>
                                            <i class="bi bi-eye-fill"></i>
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
