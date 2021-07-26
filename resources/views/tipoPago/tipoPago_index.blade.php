@extends('layouts.layout')

@section('content')
<section id="formulario">   
    <div class="container">
        <div class="col-12">
            <div class="section-title">
                <h2>TIPO DE PAGO <i class="fa fa-box"></i></h2>
            </div>
            <a href="{{route("tipoPago.create")}}" class="btn btn-success mb-2">Agregar</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>TIPO DE PAGOS</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tipoPago as $tipoPagos)
                        <tr>
                            <td><h5> {{$tipoPagos->tipoPago}}</h5></td>
                            <td>
                                <a class="btn btn-warning" href="{{route("tipoPago.edit",[$tipoPagos])}}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{route("tipoPago.destroy", [$tipoPagos])}}" method="post">
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
</section>

@endsection
