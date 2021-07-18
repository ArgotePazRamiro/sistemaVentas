@extends('layouts.layout')


@section('content')

    <div class="container">
        <div class="bg-white p-5 shadow rounded">

            <h1>{{ $personal->nombre }}</h1>
            <p class="text-secundary">{{ $personal->aPaterno }}</p>
            <p class="text-black-50">{{ $personal->aMaterno }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <a href="{{ route('personal.index') }}">
                    Regresar
                </a>

                <div class="btn-group btn-group-sm">
                    <a class="btn btn-warning" href="{{ route('personal.edit', $personal) }}">
                        Editar
                    </a>
                    <form class="" method="POST" action="{{ route('personal.destroy', $personal->id) }}">
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
