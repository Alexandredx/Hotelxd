<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use App\Models\Habitacion;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ReservaController extends Controller
{
    public function index()
    {
        $reservas = Reserva::with(['usuario', 'habitacion'])->get();  // Obtener todas las reservas con las relaciones
        return view('reservas.index', compact('reservas'));
    }

    public function create()
    {
        $usuarios = Usuario::all();
        $habitaciones = Habitacion::all();
        return view('reservas.create', compact('usuarios', 'habitaciones'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_usuario' => 'required|exists:usuarios,ID_usuario',
            'ID_habitacion' => 'required|exists:habitaciones,ID_habitacion',
            'N°_personas' => 'required|integer',
            'estado' => 'required',
            'H_entrada' => 'required|date',
            'H_salida' => 'required|date',
            'Precio_Total' => 'required|numeric',
        ]);

        Reserva::create($request->all());

        return redirect()->route('reservas.index');
    }
}

