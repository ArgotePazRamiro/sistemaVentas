@extends('layouts.layout')

@section('content')

    <section id="formulario" class="formulario">
        <div class="container">

            <div class="section-title">
                <h2>PERSONAL</h2>
                <a href="{{ route('personal.create') }}" ><button type="submit"  class="btn btn-lg btn-block">CREAR PERSONAL</button>
                </a>
            </div>
            <div class="col-lg-12 d-flex align-items-stretch">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th class="th">Nombre</th>
                                <th class="th">Apellido Paterno</th>
                                <th class="th">Apellido Materno</th>
                                <th class="th">Celular</th>
                                <th> </th>
                            </tr>
                        </thead>
                        @forelse ($personal as $per)
                        <tbody>
                            <tr class="table-active">
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
                                    <a href="{{route('personal.show',$per)}}"><div class="info"><i class="bi bi-eye-fill"></i></div></a>
                                </th>

                            </tr>
                        </tbody>
                    @empty
                        <tbody>
                            <tr>
                                <th>
                                    <span class="list-group-item border-0 mb-3 shadow-sm">
                                        no hay archivos
                                    </span>
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
