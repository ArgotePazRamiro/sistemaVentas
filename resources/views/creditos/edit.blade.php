@extends('layouts.layout')


@section('content')
    <section id="contact" class="contact">
        <div class="container">
            <div class="col-12">
                <div class="section-title">
                    <h2>Editar-Agregar Credito</h2>
                </div>
                <form method="POST" action="{{route("creditos.update", [$creditos])}}">
                    @method("PATCH")
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="label">saldo</label>
                            <input disabled value="{{ $creditos->saldo }}" autocomplete="off" name="saldo"
                                class="form-control" type="text" placeholder="saldo">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="label">aCuenta</label>
                            <input disabled value="{{ $creditos->aCuenta }}" autocomplete="off" name="aCuenta"
                                class="form-control" type="text" placeholder="saldo">
                        </div>
                        
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="label">fechaLimite</label>
                            <input disabled value="{{ $creditos->fechaLimite }}" autocomplete="off" name="fechaLimite"
                                class="form-control" type="text" placeholder="fechaLimite">
                        </div>
                        <div class="form-group col-md-6">
                            <label class="label">Emei</label>
                            <input disabled value="{{ $creditos->codigo }}" autocomplete="off" name="codigo"
                                class="form-control" type="text" placeholder="codigo">
                        </div>
                        
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <h4>CUOTA 1</h4>
                            <input value="{{ $creditos->couta1 }}" name="couta1"
                                id="couta1"
                                autocomplete="off"
                                class="form-control" type="text" 
                                placeholder="Cuota 1">
                        </div>
                        <div class="form-group col-md-6">
                            <h4>FECHA 1</h4>
                            <input autocomplete="off" value="{{ $creditos->fecha1 }}" name="fecha1" 
                                class="form-control border-1 bg shadow-sm" type="date" placeholder="Fecha 1">
                        </div>

                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <h4>CUOTA 2</h4>
                            <input autocomplete="off" value="{{ $creditos->couta2 }}" name="couta2" id="couta2"
                                class="form-control border-1 bg shadow-sm" type="text" placeholder="Cuota 2">
                        </div>
                        <div class="form-group col-md-6">
                            <h4>FECHA 2</h4>
                            <input autocomplete="off" value="{{ $creditos->fecha2 }}" name="fecha2"
                                class="form-control border-1 bg shadow-sm" type="date" placeholder="Fecha 2">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <h4>CUOTA 3</h4>
                            <input autocomplete="off" value="{{ $creditos->couta3 }}" name="couta3"
                                class="form-control border-1 bg shadow-sm" type="text" placeholder="Cuota 3">
                        </div>
                        <div class="form-group col-md-6">
                            <h4>FECHA 3</h4>
                            <input autocomplete="off" value="{{ $creditos->fecha3 }}" name="fecha3"
                                class="form-control border-1 bg shadow-sm" type="date" placeholder="Fecha 3">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <h4>CUOTA 4</h4>
                            <input autocomplete="off" value="{{ $creditos->couta4 }}" name="couta4"
                                class="form-control border-1 bg shadow-sm" type="text" placeholder="Cuota 4">
                        </div>
                        <div class="form-group col-md-6">
                            <h4>FECHA 4</h4>
                            <input autocomplete="off" value="{{ $creditos->fecha4 }}" name="fecha4"
                                class="form-control border-1 bg shadow-sm" type="date" placeholder="Fecha 4">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <h4>CUOTA 5</h4>
                            <input autocomplete="off" value="{{ $creditos->couta5 }}" name="couta5"
                                class="form-control border-1 bg shadow-sm" type="text" placeholder="Cuota 5">
                        </div>
                        <div class="form-group col-md-6">
                            <h4>FECHA 5</h4>
                            <input autocomplete="off" value="{{ $creditos->fecha5 }}" name="fecha5"
                                class="form-control border-1 bg shadow-sm" type="date" placeholder="Fecha 5">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <h4>CUOTA 6</h4>
                            <input autocomplete="off" value="{{ $creditos->couta6 }}" name="couta6"
                                class="form-control border-1 bg shadow-sm" type="text" placeholder="Cuota 6">
                        </div>
                        <div class="form-group col-md-6">
                            <h4>FECHA 6</h4>
                            <input autocomplete="off" value="{{ $creditos->fecha6 }}" name="fecha6"
                                class="form-control border-1 bg shadow-sm" type="date" placeholder="Fecha 6">
                        </div>
                    </div>
                    <br>
                    <button class="btn btn-success">Guardar</button>
                    <a class="btn btn-primary" href="{{ route('creditos.show') }}">Volver</a>
                </form>
            </div>
        </div>

    </section>
@endsection
