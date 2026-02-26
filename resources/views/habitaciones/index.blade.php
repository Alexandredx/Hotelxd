@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Habitaciones Disponibles</h1>
        
        @if ($habitaciones->isEmpty())
            <p>No hay habitaciones disponibles en este momento.</p>
        @else
            <div class="row">
                @foreach($habitaciones as $habitacion)
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">{{ $habitacion->tipo_habitacion }}</h5>
                                <p>Precio por noche: S/. {{ $habitacion->precio_dia }}</p>
                                <p>Capacidad: {{ $habitacion->capacidad_maxima }} personas</p>
                                <a href="{{ route('habitaciones.show', $habitacion->id) }}" class="btn btn-primary">Ver Detalles</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection