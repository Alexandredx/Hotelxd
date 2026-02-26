@extends('layouts.app')

@section('content')
    <h1>Editar Reserva #{{ $reserva->id }}</h1>

    <form action="{{ route('reservas.update', $reserva->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="usuario_id">Usuario</label>
            <select name="usuario_id" class="form-control" required>
                @foreach($usuarios as $usuario)
                    <option value="{{ $usuario->id }}" {{ $reserva->usuario_id == $usuario->id ? 'selected' : '' }}>
                        {{ $usuario->nombre }} {{ $usuario->apellido }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="habitacion_id">Habitación</label>
            <select name="habitacion_id" class="form-control" required>
                @foreach($habitaciones as $habitacion)
                    <option value="{{ $habitacion->id }}" {{ $reserva->habitacion_id == $habitacion->id ? 'selected' : '' }}>
                        {{ $habitacion->tipo_habitacion }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="numero_personas">Número de Personas</label>
            <input type="number" name="numero_personas" class="form-control" value="{{ $reserva->numero_personas }}" required>
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <input type="text" name="estado" class="form-control" value="{{ $reserva->estado }}" required>
        </div>

        <div class="form-group">
            <label for="h_entrada">Fecha de Entrada</label>
            <input type="date" name="h_entrada" class="form-control" value="{{ $reserva->h_entrada }}" required>
        </div>

        <div class="form-group">
            <label for="h_salida">Fecha de Salida</label>
            <input type="date" name="h_salida" class="form-control" value="{{ $reserva->h_salida }}" required>
        </div>

        <div class="form-group">
            <label for="precio_total">Precio Total</label>
            <input type="number" name="precio_total" class="form-control" value="{{ $reserva->precio_total }}" required>
        </div>

        <button type="submit" class="btn btn-success">Actualizar Reserva</button>
    </form>
@endsection