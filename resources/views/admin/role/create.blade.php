@extends('layouts.layout')

@section('content')
    <section class="contact" id="contact">
        <div class="container">
            <div class="section-title">
                <h2>Asignar rol</h2>
                <h4><a class="btn atras" href="{{ route('roles.index') }}"><i class='bx bx-arrow-back' ></i></i> Atras</a></h4>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-12 ">
                  <div class="shadow bg-white rounded">
                    <div class="col-auto mx-auto p-3 mb-3 bg-white rounded">
                      {!! Form::open([ 'route'=>'roles.store']) !!}
                      @include('admin.role.partials._form')
                    </div>
                    <div class="px-4 py-3 bg-light text-end sm:px-6">
                      {!! Form::submit('Guardar Datos', ['class' => 'btn btn-success']) !!}
                    </div>
                  </div>
                  {!! Form::close() !!}
                </div>
              </div>
        </div>
    </section>
@endsection
