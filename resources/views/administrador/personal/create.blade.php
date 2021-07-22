@extends('layouts.layout')


@section('content')
    <section id="formulario" class="formulario">
        <div class="container">
            <div class="section-title">
                <h2>CREACION DE PERSONAL</h2>
            </div>
            <div class="row">
                <div class="col col-sm-11 col-lg-11 mt-5mt-lg-0 d-flex mx-auto ">
                    {{-- col-lg-11 mt-5 mt-lg-0 d-flex align-items-stretch --}}
                    
                    <form action="{{route('personal.store')}}" method="POST" role="form" class="">
                        @csrf
                        @include('administrador.personal._form')
                    </form>
                    

                </div>
            </div>
            
                
            
        </div>
    </section>
@endsection
