@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center">Bienvenido al sistema de Reservas de Hotel</h1>
        <p class="text-center">Gestiona tus reservas de manera fácil y rápida.</p>

        <div class="row text-center">
            <!-- Tarjetas para crear reserva, ver habitaciones y gestionar pagos -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Haz una nueva reserva</h5>
                        <p>Realiza una nueva reserva en nuestro hotel.</p>
                        <a href="{{ route('reservas.create') }}" class="btn btn-primary">Crear Reserva</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ver habitaciones</h5>
                        <p>Consulta las habitaciones disponibles y su disponibilidad.</p>
                        <a href="{{ route('habitaciones.index') }}" class="btn btn-primary">Ver Habitaciones</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gestionar Pagos</h5>
                        <p>Realiza pagos de tus reservas de manera segura.</p>
                        <a href="{{ route('pagos.create', ['reservaId' => 1]) }}" class="btn btn-primary">Pagar Reserva</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection