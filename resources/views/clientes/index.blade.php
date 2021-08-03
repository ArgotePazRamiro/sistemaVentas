@extends('layouts.layout')

@section('content')

    <section id="" class="formulario">
        <div class="container">
            <div class="col-12">
                <div class="section-title">
                    <h2>CLIENTES <i class="bi bi-people-fill"></i></h2>
                    <a href="{{ route('clientes.create') }}"><button type="submit" class="btn btn-lg btn-block">CREAR
                            NUEVO
                            CLIENTE <i class="bi bi-person-plus-fill"></i></button></a>
                </div>
                <div class="col-lg-12 d-flex align-items-stretch">
                    <table class="table table-dark table-bordered border-light table-striped">
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

                                        <button class="btn btn-danger" data-bs-toggle="modal"
                                            data-bs-target="#staticBackdrop">
                                            <i class="bi bi-trash"></i>
                                        </button>


                                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
                                            data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
                                            aria-hidden="true">>
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header"
                                                        style="color: rgb(255, 255, 255); background:rgb(53, 0, 0)">
                                                        <h5 class="modal-title" id="staticBackdropLabel"><i
                                                                class="bi bi-exclamation-triangle"></i> AVISO<i
                                                                class="bi bi-exclamation-lg"></i><i
                                                                class="bi bi-exclamation-lg"></i><i
                                                                class="bi bi-exclamation-lg"></i></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h3 style="color: black"> SEGURO QUE QUIERE ELIMINAR EL CLIENTE</h3>
                                                        <h6 style="color: rgb(48, 48, 48)"> Si lo elimina no podra recuperar
                                                            los datos</h6>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cancelar</button>
                                                        <form action="{{ route('clientes.destroy', [$cliente]) }}"
                                                            method="post">
                                                            @method("delete")
                                                            @csrf
                                                            <button class="btn btn-danger ">
                                                                <i class="bi bi-trash"> Eliminar</i>
                                                            </button>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

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
