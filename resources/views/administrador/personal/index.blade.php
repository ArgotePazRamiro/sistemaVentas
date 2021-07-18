@extends('layouts.layout')

@section('content')

    <section id="contact" class="contact">
        <div class="container">

            <div class="section-title">
                <h2>PERSONAL</h2>
                <a class="btn btn-primary mb-0" href="{{ route('personal.create') }}">
                    Crear personal
                </a>
            </div>
            <div>
                <table class="table-dark">

                    @forelse ($personal as $per)
                        <tr>
                            <th></th>
                            <li class=" list-group-item border-0 mb-3 shadow-sm">
                                <a class="text-secondary d-flex justify-content-between align-items-center"
                                    href="{{ route('personal.show', $per) }}">
                                    <span class="font-weight-bold">
                                        {{ $per->nombre }}
                                    </span>
                                    <span class="font-weight-bold">
                                        {{ $per->aPaterno }}
                                    </span>
                                    <span class="font-weight-bold">
                                        {{ $per->aMaterno }}
                                    </span>
                                </a>
                            </li>
                        @empty
                            <li class="list-group-item border-0 mb-3 shadow-sm">
                                no hay archivos
                            </li>
                    @endforelse
                    {{ $personal->links() }}
                    </tr>
                </table>
            </div>

        </div>

    </section><!-- End Section -->

@endsection
