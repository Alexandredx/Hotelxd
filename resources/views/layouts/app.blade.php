<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel - Sistema de Reservas</title>
    <!-- Aquí puedes agregar CSS o enlaces a frameworks -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <nav>
            <a href="{{ route('reservas.index') }}">Reservas</a>
            <a href="{{ route('habitaciones.index') }}">Habitaciones</a>
            <a href="{{ route('usuarios.index') }}">Usuarios</a>
        </nav>

        @yield('content')
    </div>
</body>
</html>