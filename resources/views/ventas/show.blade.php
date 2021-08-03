@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-12">
        <h1>Detalle de venta #{{$venta->id}}</h1>
        <h1>Cliente: <small>{{$venta->cliente->nombre}}</small></h1>
        <a class="btn btn-info" href="{{route("ventas.index")}}">
            <i class="fa fa-arrow-left"></i>&nbsp;Volver
        </a>
        {{-- <a class="btn btn-success" href="{{route("ventas.ticket", ["id" => $venta->id])}}">
            <i class="fa fa-print"></i>&nbsp;Ticket
        </a> --}}
        <h2>Productos</h2>
        <table class="table table-bordered border-primary">
            <thead>
            <tr>
                <th>nombre</th>
                <th>Categoria</th>
                <th>marca</th>
                

                <th>Precio</th>

                <th>Cantidad</th>
                <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            @foreach($venta->productos as $producto)
                <tr>
                    <td>{{$producto->nombre}}</td>
                    <td>{{$producto->categoria}}</td>
                    <td>{{$producto->marca}}</td>
                
                    
                        
                    

                    <td>Bs. {{number_format($producto->precio, 2)}}</td>
                    <td>{{$producto->cantidad}}</td>
                    <td>Bs. {{number_format($producto->cantidad * $producto->precio, 2)}}</td>
                </tr>

        
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="table-active"></td>
                    <td><strong>Total</strong></td>
                    <td>Bs. {{number_format($total, 2)}}</td>
                </tr>
                </tfoot>
            <tfoot>
                <tr>
                    <td colspan="2" class="table-active"></td>
                <td><strong>TRANSFERENCIA</strong></td>
                <td><strong>EFECTIVO</strong></td>
                <td><strong>TARJETA</strong></td>
                <td><strong>DEPOSITO</strong></td>
                </tr>
                <tr>
                    <td colspan="2" class="table-active"></td>
                <td>{{$venta->transferencia}}</td>
                <td>{{$venta->efectivo}}</td>
                <td>{{$venta->tarjeta}}</td>
                <td>{{$venta->deposito}}</td>
                </tr>
                </tfoot>
            @endforeach
            
        </table>

    </div>
</div>


@endsection