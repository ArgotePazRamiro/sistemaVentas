@extends('layouts.layout')

@section('content')
  @if (session('info'))
    <div class="alert alert-success" id="success-alert">
      {{ session('info') }}
    </div>
  @endif

  <section id="contact" class="contact">
    <div class="container">
      <div class="section-title">
        <h2>Lista de Usuarios</h2>
      </div>
    </div>

    <div class="container">
        <table class="display table dtr-inline collapsed">
            <thead>
              <tr>
                <th>ID</th>
                <th data-priority="1">Nombre</th>
                <th>Usuario</th>
                <th data-priority="2">Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @forelse($usuarios as $usuario)
                  <td>{{ $usuario->id }}</td>
                  <td>{{ $usuario->nombre }}</td>
                  <td>{{ $usuario->usuario }}</td>
                  <td width="15%">
                    {{-- @can('users.edit') --}}
                      <a class="btn btn-warning btn-sm" href="{{ route('users.edit', $usuario) }}">Asignar rol</a>
                    {{-- @endcan --}}
                  </td>
              </tr>
            @empty
              <tr>
                <td colspan="3" class="errortable" align="center">No hay datos disponibles</td>
              </tr>
              @endforelse
            </tbody>
          </table>
          {{ $usuarios->links() }}
    </div>

  </section>
@endsection

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
  $("#success-alert").fadeTo(3000, 500).slideUp(500, function(){
    $("#success-alert").alert('close');
  });
  </script>
@endsection
