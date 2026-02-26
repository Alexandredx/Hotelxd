@extends('layouts.app')

@section('content')
    <h1>Crear Pago para la Reserva #{{ $reserva->id }}</h1>

    <form action="{{ route('pagos.store', $reserva->id) }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="tipo_pago">Tipo de Pago</label>
            <input type="text" name="tipo_pago" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="monto_pagado">Monto Pagado</label>
            <input type="number" name="monto_pagado" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Registrar Pago</button>
    </form>
@endsection