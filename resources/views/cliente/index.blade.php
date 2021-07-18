@extends('layouts.layout')

@section('content')

    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>cliente</h2>
                <a class="btn btn-primary mb-0" href="{{ route('cliente.create') }}">
                    Crear Cliente
                </a>
            </div>
            <div>
                <table class="table-dark">

                    @forelse ($cliente as $cli)
                        <tr>
                            <th></th>
                            <li class=" list-group-item border-0 mb-3 shadow-sm">
                                <a class="text-secondary d-flex justify-content-between align-items-center"
                                    href="{{ route('cliente.show', $cli) }}">
                                    <span class="font-weight-bold">
                                        {{ $cli->nombre }}
                                    </span>
                                    <span class="font-weight-bold">
                                        {{ $cli->aPaterno }}
                                    </span>
                                    <span class="font-weight-bold">
                                        {{ $cli->aMaterno }}
                                    </span>
                                </a>
                            </li>
                        @empty
                            <li class="list-group-item border-0 mb-3 shadow-sm">
                                no hay archivos
                            </li>
                    @endforelse
                    {{ $cliente->links() }}
                    </tr>
                </table>
            </div>

        </div>

    </section><!-- End Section -->

@endsection
