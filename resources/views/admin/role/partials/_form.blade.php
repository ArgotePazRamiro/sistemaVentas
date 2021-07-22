<div class="form-group">
    <div class="row">
      <div class="col-12">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        @error('name')
          <small class="text-danger">{{$message}}</small>
        @enderror
      </div>
    </div>
  </div>
  <br>
  <h3 class="h3">Lista de Permisos</h3>
  <div>
      @foreach ($permissions as $permission)
        <div>
          <label>
            {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
            {{$permission->description}}
          </label>
        </div>
      @endforeach
  </div>
