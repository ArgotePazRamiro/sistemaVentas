@csrf
<div class="row">
    <div class="form-group col-md-4">
        <label for="nombre">NOMBRE</label>
        <input type="text" name="nombre" class="form-control" id="nombre" value="{{ old('nombre', $producto->nombre)}}" required>
    </div>
    <div class="form-group col-md-4">
        <label for="precioUnitario">PRECIO UNITARIO </label>
        <input type="numeric" class="form-control" name="precioUnitario" id="precioUnitario" value="{{ old('precioUnitario', $producto->precioUnitario)}}"required>
    </div>
    <div class="form-group col-md-4">
        <label for="stock">STOCK </label>
        <input type="numeric" class="form-control" name="stock" id="stock" value="{{ old('stock', $producto->stock)}}" required>
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        <label for="marca">MARCA</label>
        <input type="text" class="form-control" name="marca" id="marca" value="{{ old('marca', $producto->marca)}}"required>
    </div>
    <div class="form-group col-md-6">
        <label for="nSerie">NUMERO DE SERIE</label>
        <input type="numeric" name="nSerie" class="form-control" id="nSerie" value="{{ old('nSerie', $producto->nSerie)}}" required>
    </div>
    
    
</div>



<div class="row">
    <div class="form-group col-md-6">
        <label for="precioComision">PRECIO DE COMISION</label>
        <input type="numeric" name="precioComision" class="" id="precioComision"
        value="{{ old('precioComision', $producto->precioComision)}}" required>
    </div>
    <div class="form-group col-md-6">
        <label for="categoria">CATEGORIA</label>
        <input type="text" name="categoria" class="form-control" id="categoria"
        value="{{ old('categoria', $producto->categoria)}}" required>
    </div>

</div>


<div class="text-center">
    <button type="submit">GUARDAR</button>
</div>

