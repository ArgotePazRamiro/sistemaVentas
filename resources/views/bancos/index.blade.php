@extends('layouts.layout')

@section('content')
<section id="formulario">   
    <div class="container">
        <div class="col-12">
            <div class="section-title">
                <h2>AGREGAR CUENTA DE BANCO <i class="fa fa-box"></i></h2>
            </div>
            <a href="{{route("bancos.create")}}" class="btn btn-success mb-2">Agregar</a>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>NOMBRE DE BANCO</th>
                        <th>CUENTA</th>
                        <th>MONTO</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($bancos as $banco)
                        <tr>
                            <td><h5> {{$banco->nombre}}</h5></td>
                            <td><h5> {{$banco->numeroCuenta}}</h5></td>

                            <td><h5> {{$banco->montoInicial}}</h5></td>

                            <td>
                                <a class="btn btn-warning" href="{{route("bancos.edit",[$banco])}}">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{route("bancos.destroy", [$banco])}}" method="post">
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
