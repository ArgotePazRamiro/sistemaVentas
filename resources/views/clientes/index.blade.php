@extends('layouts.layout')

@section('content')

<section id="formulario" class="formulario">
    <div class="container">
            <div class="col-12">
                <div class="section-title">
                    <h2>CLIENTES <i class="bi bi-people-fill"></i></h2>
                    <a href="{{ route('clientes.create')}}"><button type="submit"  class="btn btn-lg btn-block">CREAR NUEVO CLIENTE <i class="bi bi-person-plus-fill"></i></button></a>
                </div>
                <div class="col-lg-12 d-flex align-items-stretch">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>CI-NIT</th>
                                <th>Teléfono</th>
                                <th>Direccion</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->nombre }}</td>
                                    <td>{{ $cliente->apellidos }}</td>
                                    <td>{{ $cliente->ci }}</td>
                                    <td>{{ $cliente->telefono }}</td>
                                    <td>{{ $cliente->direccion }}</td>

                                    <td>
                                        <a class="btn btn-warning" href="{{ route('clientes.edit', [$cliente]) }}">
                                            <i class="bi bi-pencil-square"></i>
                                        </a>
                                    </td>
                                    <td>
                                        <form action="{{ route('clientes.destroy', [$cliente]) }}" method="post">
                                            @method("delete")
                                            @csrf
                                            <button  class="btn btn-danger ">
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

    </section><!-- End Section -->

@endsection
