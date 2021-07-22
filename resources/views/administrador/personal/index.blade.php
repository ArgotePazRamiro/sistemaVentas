@extends('layouts.layout')

@section('content')

    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>PERSONAL</h2>
                <a href="{{ route('personal.create') }}" ><button type="submit"  class="btn btn-lg btn-block">CREAR PERSONAL</button>
                </a>
            </div>
            <div class="col-lg-12 d-flex align-items-stretch">
                    <table class="table table-dark">
                        <thead>
                            <tr class="">
                                <th>Nombre</th>
                                <th>Apellido Paterno</th>
                                <th>Apellido Materno</th>
                                <th>Celular</th>
                                <th> </th>
                            </tr>
                        </thead>
                        @forelse ($personal as $per)
                        <tbody>
                            <tr>
                                <th>
                                    <span class="font-weight-bold">
                                            {{ $per->nombre }}
                                    </span>
                                </th>
                                <th>
                                    <span class="font-weight-bold">
                                        {{ $per->aPaterno }}
                                    </span>
                                </th>
                                <th>
                                    <span class="font-weight-bold">
                                        {{ $per->aMaterno }}
                                    </span>
                                </th>
                                <th>
                                    <span class="font-weight-bold">
                                        {{ $per->celular }}
                                    </span>
                                </th>
                                <th>
                                    
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
                {{ $personal->links() }}

                </table>
            </div>

        </div>

    </section><!-- End Section -->

@endsection
