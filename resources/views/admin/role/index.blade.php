@extends('layouts.layout')

@section('content')
  @if (session('info'))
    <div class="alert alert-success" id="success-alert">
      {{ session('info') }}
    </div>
  @endif

  <section class="content" class="content">
    <div class="container">
        <div class="section-title">
            <h2>Roles</h2>
            <a class="btn btn-primary mb-0" href="{{ route('roles.create') }}">
                Crear Rol
            </a>
        </div>
    </div>
    <div class="container">
              <table class="display table dtr-inline collapsed" >
                <thead>
                  <tr>
                    <th>ID</th>
                    <th data-priority="1">Role</th>
                    <th data-priority="2">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    @forelse($roles as $role)
                      <td>{{ $role->id }}</td>
                      <td>{{ $role->name }}</td>
                      <td width="15%">

                        <a href="{{ route('roles.edit', $role) }}" class="btn btn-success btn-sm"><i class='bx bx-edit' ></i></a>


                        <div class="btn-delete-role" style="display: inline-block;">
                          <form action="{{ route('roles.destroy', $role) }}" method="POST">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger btn-sm"><i class='bx bx-trash' ></i></button>
                          </form>
                        </div>


                      </td>
                    </tr>
                  @empty
                    <tr>
                      <td colspan="3" class="errortable" align="center">No hay datos disponibles</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
    </div>
  </section>
@endsection

@section('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    $("success-alert").fadeTo(3000, 500).slideUp(500, function(){
      $("#success-alert").alert('close');
    });</script>
@endsection
