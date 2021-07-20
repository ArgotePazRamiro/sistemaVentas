@extends('layouts.layout')

@section('content')

    <section id="formulario" class="formulario">
        <div class="container">
            <div class="section-title">
                <h2>VENTAS</h2>
                <button type="submit" class="btn btn-lg btn-block" href="{{ route('ventas.create') }}">
                    CREAR VENTA
                </button>
            </div>
            <div class="col-lg-11 d-flex align-items-stretch">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th class="th">Movimiento</th>
                                <th class="th">SubTotal</th>
                                <th class="th">Descuento</th>
                                <th class="th">Cantidad</th>
                                <th class="th">Total</th>
                                
                                <th class="th">Cliente</th>
                                <th> </th>
                            </tr>
                        </thead>
                        @forelse ($ventas as $ven)
                        <tbody>
                            <tr class="table-active">
                                <th>
                                    <span class="font-weight-bold">
                                            {{ $ven->movimiento }}
                                    </span>
                                </th>
                                <th>
                                    <span class="font-weight-bold">
                                        {{ $ven->subtotal }}
                                    </span>
                                </th>
                                <th>
                                    <span class="font-weight-bold">
                                        {{ $ven->descuento }}
                                    </span>
                                </th>
                                <th>
                                    <span class="font-weight-bold">
                                        {{ $ven->cantidad }}
                                    </span>
                                </th>
                                <th>
                                    <span class="font-weight-bold">
                                        {{ $ven->total }}
                                    </span>
                                </th>
                                <th>
                                    <span class="font-weight-bold">
                                        {{ $ven->cliente_id }}
                                    </span>
                                </th>
                                <th>
                                    <a href="{{route('personal.show',$ven)}}"><i class="bi bi-eye-fill"></i></a>
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
                {{ $ventas->links() }}

                </table>
            </div>

        </div>

    </section><!-- End Section -->

@endsection
