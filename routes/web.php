<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ReservaController;
use App\Http\Controllers\PagoController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas para los usuarios
Route::resource('usuarios', UsuarioController::class);

// Rutas para las reservas
Route::resource('reservas', ReservaController::class);

// Rutas para los pagos
Route::get('pagos/create/{reservaId}', [PagoController::class, 'create'])->name('pagos.create');
Route::post('pagos/store/{reservaId}', [PagoController::class, 'store'])->name('pagos.store');