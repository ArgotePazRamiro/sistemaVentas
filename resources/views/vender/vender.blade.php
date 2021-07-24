@extends('layouts.layout')

@section('content')
<section>
    <div class="container">
        <div class="col-12">
            <h1>Nueva venta <i class="fa fa-cart-plus"></i></h1>
            <div class="row">
                <div class="col-12 col-md-6">
                    <form action="{{route("terminarOCancelarVenta")}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="id_cliente">Cliente</label>
                            <select required class="form-control" name="id_cliente" id="id_cliente">
                                @foreach($clientes as $cliente)
                                    <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if(session("productos") !== null)
                            <div class="form-group">
                                <button name="accion" value="terminar" type="submit" class="btn btn-success">Terminar
                                    venta
                                </button>
                                <button name="accion" value="cancelar" type="submit" class="btn btn-danger">Cancelar
                                    venta
                                </button>
                            </div>
                        @endif
                    </form>
                </div>
                <div class="col-12 col-md-6">
                    <form action="{{route("agregarProductoVenta")}}" method="POST">
                        @csrf
                        
                        <div class="form-group">
                            <label for="nombre">Código de barras</label>
                            <input id="nombre" autocomplete="off" required autofocus name="nombre" type="text"
                                   class="form-control"
                                   placeholder="Código de barras">
                                   
                        </div>
                    </form>
                </div>
            </div>
            @if(session("productos") !== null)
                <h2>Total: Bs {{number_format($total, 2)}}</h2>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Nombre Producto</th>
                            <th>Cantidad</th>
                            <th>marca</th>
                            <th>Precio Unitario</th>
                            <th>Precio Total</th>
                            
                            <th>Quitar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(session("productos") as $producto)
                            <tr>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->cantidad}}</td>
                                
                                <td>{{$producto->marca}}</td>
                                <td>Bs.{{number_format($producto->precio_venta, 2)}}</td>   
                                <td>Bs. {{number_format($total, 2)}}</td>                                

                                <td>
                                    <form action="{{route("quitarProductoDeVenta")}}" method="post">
                                        @method("delete")
                                        @csrf
                                        <input type="hidden" name="indice" value="{{$loop->index}}">
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <h2>Aquí aparecerán los productos de la venta
                    <br>
                    Escanea el código de barras o escribe y presiona Enter</h2>
            @endif
        </div>
    </div>

</section>

@endsection