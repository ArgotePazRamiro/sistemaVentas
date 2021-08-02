@extends('layouts.layout')

@section('content')
    <section id="formulario">
        <div class="container">
            <div>
                <div class="section-title">
                    <h2>Forma Pago</h2>
                </div>

                <div class="row">
                    <div class="col-6 col-md-6">
                        <div class="form-group">
                            <br>
                            <label for="id_tipoPago">TIPO DE PAGO</label>
                            <select required class="form-group form-select-sm" aria-label=".form-select-lg example" name="id_tipoPago" id="id_tipoPago">
                                {{-- @foreach($tipoPagos as $tipoPago) --}}
                                    <option >TARJETA</option>
                                    <option >EFECTIVO</option>
                                    <option >transaccion</option>
                                    <option {{-- value="{{$tipoPago->id}} --}}">{{-- {{$tipoPago->tipoPago}} --}}</option>
                                {{-- @endforeach --}}
                            </select>
                        </div>


                    </div>
                    <div class="col-6 col-md-6">
                        <div class="form-group">
                            <label for="title">
                                MONTO
                                <input class="form-control border-0 bg-light shadow-sm"
                                    type="text"
                                    id="title"
                                    name="title"
                                    value=""
                                >
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
