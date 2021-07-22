@extends('layouts.layout')


@section('content')
<section id="contact" class="contact">
    <div class="container">
        
        <div class="row">
            <div class="col-lg-11 mt-5 mt-lg-0 d-flex align-items-stretch">
                

                <form action="{{route('personal.update',$personal)}}" method="POST" role="form" class="">
                    @method('PATCH')
                    <div class="section-title">
                        <h2>EDITAR PERSONAL</h2>
                    </div>
                    @include('administrador.personal._form')
                </form>
            </div>
        </div>
    </div>
</section>
@endsection