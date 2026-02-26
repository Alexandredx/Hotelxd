@extends('layouts.app')

@section('content')
    <h1>Lista de Reservas</h1>

    <table class="table">
        <thead>
            <tr>
                <th>Usuario</th>
                <th>Habitación</th>
                <th>Fecha de Entrada</th>
                <th>Fecha de Salida</th>
                <th>Precio Total</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($reservas as $reserva)
                <tr>
                    <td>{{ $reserva->usuario->nombre }} {{ $reserva->usuario->apellido }}</td>
                    <td>{{ $reserva->habitacion->tipo_habitacion }}</td>
                    <td>{{ $reserva->h_entrada }}</td>
                    <td>{{ $reserva->h_salida }}</td>
                    <td>{{ $reserva->precio_total }}</td>
                    <td>
                        <a href="{{ route('reservas.edit', $reserva->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('reservas.destroy', $reserva->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('reservas.create') }}" class="btn btn-primary">Crear nueva reserva</a>
@endsection