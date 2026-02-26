@extends('layouts.app')

@section('content')
    <h1>Crear Reserva</h1>

    <form action="{{ route('reservas.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="usuario_id">Usuario</label>
            <select name="usuario_id" class="form-control" required>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}">{{ $usuario->nombre }} {{ $usuario->apellido }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="habitacion_id">Habitación</label>
            <select name="habitacion_id" class="form-control" required>
                @foreach($habitaciones as $habitacion)
                    <option value="{{ $habitacion->id }}">{{ $habitacion->tipo_habitacion }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="numero_personas">Número de Personas</label>
            <input type="number" name="numero_personas" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="h_entrada">Fecha de Entrada</label>
            <input type="date" name="h_entrada" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="h_salida">Fecha de Salida</label>
            <input type="date" name="h_salida" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="precio_total">Precio Total</label>
            <input type="number" name="precio_total" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Crear Reserva</button>
    </form>
@endsection