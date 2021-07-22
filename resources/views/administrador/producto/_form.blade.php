@csrf

<div class="row  ">
    <div class="form-group has-validation">
        <label for="nombre">NOMBRE</label>
        <input type="text" name="nombre"
            class="form-control border-1 bg-light shadow-sm @error('nombre') is-invalid @else border-1 @enderror "
            id="nombre" value="{{ old('nombre', $producto->nombre) }}">
        @error('nombre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group col-md-4">
        <label for="precioUnitario">PRECIO UNITARIO </label>
        <input type="numeric"
            class="form-control border-1 bg-light shadow-sm @error('precioUnitario') is-invalid @else border-1 @enderror "
            name="precioUnitario" id="precioUnitario" value="{{ old('precioUnitario', $producto->precioUnitario) }}">
        @error('precioUnitario')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group col-md-4">
        <label for="stock">STOCK </label>
        <input type="numeric"
            class="form-control border-1 bg-light shadow-sm @error('stock') is-invalid @else border-1 @enderror "
            name="stock" id="stock" value="{{ old('stock', $producto->stock) }}">
            @error('stock')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
</div>

<div class="row">
    <div class="form-group col-md-6">
        <label for="marca">MARCA</label>
        <input type="text"
            class="form-control border-1 bg-light shadow-sm @error('marca') is-invalid @else border-1 @enderror "
            name="marca" id="marca" value="{{ old('marca', $producto->marca) }}">
            @error('marca')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label for="nSerie">NUMERO DE SERIE</label>
        <input type="nSerie" name="nSerie"
            class="form-control border-1 bg-light shadow-sm @error('nSerie') is-invalid @else border-1 @enderror "
            id="nSerie" value="{{ old('nSerie', $producto->nSerie) }}">
            @error('nSerie')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>


</div>

<div class="row">
    <div class="form-group col-md-6">
        <label for="precioComision">PRECIO DE COMISION</label>
        <input type="numeric" name="precioComision"
            class="form-control border-1 bg-light shadow-sm @error('precioComision') is-invalid @else border-1 @enderror "
            id="precioComision" value="{{ old('precioComision', $producto->precioComision) }}">
            @error('precioComision')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label for="categoria">CATEGORIA</label>
        <input type="text" name="categoria"
            class="form-control border-1 bg-light shadow-sm @error('categoria') is-invalid @else border-1 @enderror "
            id="categoria" value="{{ old('categoria', $producto->categoria) }}">
            @error('categoria')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

</div>


<div class="text-center">
    <br>
    <button class="btn btn-primary btn-lg btn-block" type="submit">{{ $btnText }}</button>
</div>
