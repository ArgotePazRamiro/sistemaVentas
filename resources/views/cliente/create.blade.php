@extends('layouts.layout')


@section('content')
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>CREACION DE CLIENTE</h2>
            </div>
            <div class="row">
                <div class="col-lg-11 mt-5 mt-lg-0 d-flex align-items-stretch">
                    <form action="{{route('cliente.store')}}" method="POST" role="form" class="">
                        @csrf
                        @include('cliente._form')
                    </form>

                </div>
            </div>
        </div>
    </section>
@endsection