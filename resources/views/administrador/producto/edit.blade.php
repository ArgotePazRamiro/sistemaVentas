@extends('layouts.layout')


@section('content')
<section id="contact" class="contact">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-11 mt-5 mt-lg-0 d-flex align-items-stretch">
                <form action="{{route('producto.update',$producto)}}" method="POST" role="form" class="">
                    @method('PATCH')
                    <div class="section-title">
                        <h2>EDITAR producto</h2>
                    </div>
                    @include('administrador.producto._form')
                </form>
            </div>
        </div>
    </div>
</section>
@endsection