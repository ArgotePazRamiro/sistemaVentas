@extends('layouts.layout')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-10 col-lg-10 mx-auto">
                {{-- @include('partials.validation-errors') --}}
                <form action="{{route('producto.store')}}" method="POST" role="form" class="bg-white py-4 px-4 shadow rounded">
                    <div class="section-title">
                        <h2>CREACION DE PRODUCTO</h2>
                    </div>
                    @include('administrador.producto._form',['btnText'=>'Guardar'])
                </form>
            </div>
        </div>
    </div>
@endsection
