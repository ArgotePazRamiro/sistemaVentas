@extends('layouts.layout')

@section('content')
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Asignar rol</h2>
                <h4><a class="btn atras" href="{{ route('users.index') }}"><i class='bx bx-arrow-back' ></i></i> Atras</a></h4>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-12 ">
                  <div class="shadow bg-white rounded">
                    <div class="col-auto mx-auto p-3 mb-3 bg-white rounded">
                      <p class="h5">Nombre</p>
                      <p class="form-control">{{$user->nombre}}</p>
                      <h5>Listado de Roles</h5>
                      {!! Form::model($user, [ 'route'=> ['users.update', $user], 'method' => 'put']) !!}
                      <div class="form-group">
                        <div class="row">
                          <div class="col-12">
                            @foreach ($roles as $role)
                              <div>
                                <label>
                                  {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                  {{$role->name}}
                                </label>
                              </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
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
