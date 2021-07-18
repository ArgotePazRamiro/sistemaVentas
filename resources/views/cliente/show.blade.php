@extends('layouts.layout')


@section('content')

    <div class="container">
        <div class="bg-white p-5 shadow rounded">

            <h1>{{ $cliente->nombre }}</h1>
            <p class="text-secundary">{{ $cliente->aPaterno }}</p>
            <p class="text-black-50">{{ $cliente->aMaterno }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('cliente.index') }}">
                    Regresar
                </a>

                <div class="btn-group btn-group-sm">
                    <a class="btn btn-warning" href="{{ route('cliente.edit', $cliente) }}">
                        Editar
                    </a>
                    <form class="" method="POST" action="{{ route('cliente.destroy', $cliente->id) }}">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger" >
                            Eliminar
                        </button>
                    </form>  
                    
                </div>  
                        
                   
            </div>
            
            
        </div>
    </div>

@endsection
