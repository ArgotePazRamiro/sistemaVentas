@csrf
<div class="row">
    <div class="form-group col-md-4">
        <label for="nombre">NOMBRE</label>
        <input type="text" name="nombre" class="form-control" id="nombre" value="{{ old('nombre', $cliente->nombre)}}" required>
    </div>
    <div class="form-group col-md-4">
        <label for="aPaterno">APELLIDO PATERNO </label>
        <input type="text" class="form-control" name="aPaterno" id="aPaterno" value="{{ old('aPaterno', $cliente->aPaterno)}}"required>
    </div>
    <div class="form-group col-md-4">
        <label for="aMaterno">APELLIDO MATERNO </label>
        <input type="text" class="form-control" name="aMaterno" id="aMaterno" value="{{ old('aMaterno', $cliente->aMaterno)}}" required>
    </div>
</div>



<div class="row">
    <div class="form-group col-md-6">
        <label for="ci">CARNET DE IDENTIDAD / NIT</label>
        <input type="numeric" name="ci" class="form-control" id="ci"
        value="{{ old('ci', $cliente->ci)}}" required>
    </div>

    <div class="form-group col-md-6">
        <label for="celular">CELULAR</label>
        <input type="numeric" class="form-control" name="celular" id="celular" 
        value="{{ old('celular', $cliente->celular)}}" required>
    </div>
</div>




<div class="text-center">
    <button type="submit">GUARDAR</button>
</div>

