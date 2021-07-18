@csrf
<div class="row">
    <div class="form-group ">
        <label for="nombre">NOMBRE</label>
        <input type="text" name="nombre" class="form-control border-1 bg-light shadow-sm"
         id="nombre" value="{{ old('nombre', $personal->nombre)}}" required>
    </div>
    <div class="form-group col-md-6">
        <label for="aPaterno">APELLIDO PATERNO </label>
        <input type="text" class="form-control border-1 bg-light shadow-sm" name="aPaterno" id="aPaterno" value="{{ old('aPaterno', $personal->aPaterno)}}"required>
    </div>
    <div class="form-group col-md-6 ">
        <label for="aMaterno">APELLIDO MATERNO </label>
        <input type="text" class="form-control border-1 bg-light shadow-sm" name="aMaterno" id="aMaterno" value="{{ old('aMaterno', $personal->aMaterno)}}" required>
    </div>
</div>



<div class="row">
    <div class="form-group col-md-6">
        <label for="ci">CARNET DE IDENTIDAD</label>
        <input type="numeric" name="ci" class="form-control" id="ci"
        value="{{ old('ci', $personal->ci)}}" required>
    </div>

    <div class="form-group col-md-6">
        <label for="celular">CELULAR</label>
        <input type="numeric" class="form-control" name="celular" id="celular" 
        value="{{ old('celular', $personal->celular)}}" required>
    </div>
</div>


<div class="row">
    <div class="form-group col-md-6">
        <label for="usuario">USUARIO</label>
        <input type="text" class="form-control" name="usuario" id="usuario" 
        value="{{ old('usuario', $personal->usuario)}}" required>
    </div>
    <div class="form-group col-md-6">
        <label for="password">CONTRASEÑA</label>
        <input type="text" class="form-control" name="password" id="password"
        value="{{ old('password', $personal->password)}}" required>
    </div>

</div>


<div class="text-center">
    <br>
    <button type="submit" class="btn  btn-lg btn-block">GUARDAR</button>
</div>

