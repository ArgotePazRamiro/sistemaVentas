@extends('layouts.layout')

@section('content')

    <section id="formulario" class="formulario">
        <div class="container">
            <div class="section-title">
                <h2>VENTAS</h2>
                <h4>Productos</h4>
            </div>
            <div class="col-lg-12 d-flex align-items-stretch">

                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th class="th">Nombre</th>
                            <th class="th">Marca</th>
                            <th class="th">Numero de Serie</th>
                            <th class="th">Precio Unitario</th>
                            <th class="th">Stock</th>
                            <th class="th">Precio Comision</th>
                            <th class="th">Categoria</th>
                        </tr>
                    </thead>
                    
                    @forelse ($data as $pro)
                    
                        <tbody>
                            <tr class="table-active">
                                <th>
                                    <a href="{{ route('ventas.show', $pro) }}">

                                        <span class="font-weight-bold">
                                            {{ $pro->nombreCliente }}
                                        </span>
                                    </a>
                                </th>
                                <th>
                                    <span class="font-weight-bold">
                                        {{ $pro->CI }}
                                    </span>
                                </th>
                                <th>
                                    <span class="font-weight-bold">
                                        {{ $pro->marca }}
                                    </span>
                                </th>
                                <th>
                                    <span class="font-weight-bold">
                                        {{ $pro->nSerie }}
                                    </span>
                                </th>
                                <th>
                                    <span class="font-weight-bold">
                                        {{ $pro->precioComision }}
                                    </span>
                                </th>
                                <th>
                                    <span class="font-weight-bold">
                                        {{ $pro->categoria }}
                                    </span>
                                </th>
                                <th>
                                    <span class="font-weight-bold">
                                        {{ $pro->stock }}
                                    </span>
                                </th>
                            </tr>
                        </tbody>
                    @empty
                        <tbody>
                            <tr>
                                <th>
                                    <li class="list-group-item border-0 mb-3 shadow-sm">
                                        no hay archivos
                                    </li>
                                </th>
                            </tr>
                        </tbody>
                    @endforelse
                    {{-- {{ $data->links() }} --}}

                </table>
            </div>

        </div>

    </section><!-- End Section -->

@endsection
