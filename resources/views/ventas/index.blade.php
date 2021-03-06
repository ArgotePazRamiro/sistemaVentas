@extends('layouts.layout')

@section('content')
    <section id="formulario" class="formulario">
        <div class="container">
            <div class="col-12">
                <h1>Ventas <i class="fa fa-list"></i></h1>
                
                <div class="table-responsive">
                    <table class="table table-striped table-dark">
                        <thead class="thead-dark">
                            <tr>
                                <th>Fecha</th>
                                <th>Cliente</th>
                                <th>Total</th>
                                {{-- <th>Ticket de venta</th> --}}
                                <th>Detalles</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($ventas as $venta)
                                <tr>
                                    <td>{{ $venta->created_at }}</td>
                                    <td>{{ $venta->cliente->nombre }}</td>
                                    
                                    <td>${{ number_format($venta->total, 1) }}</td>
                                    {{-- <td>
                                        <a class="btn btn-info" href="{{ route('ventas.ticket', ['id' => $venta->id]) }}">
                                            <i class="fa fa-print"></i>
                                        </a>
                                    </td> --}}
                                    
                                    <td>
                                        <a class="btn btn-success" href="{{ route('ventas.show', $venta) }}">
                                            <i class="bi bi-info"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('ventas.destroy', [$venta]) }}" method="post">
                                            @method("delete")
                                            @csrf
                                            <a href=""type="submit" class="btn btn-danger">
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
