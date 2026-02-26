<?php

namespace App\Http\Controllers;

use App\Models\Habitacion;
use Illuminate\Http\Request;

class HabitacionController extends Controller
{
    public function index()
    {
        // Obtener todas las habitaciones disponibles
        $habitaciones = Habitacion::all(); // Aquí puedes agregar filtros como 'estado' si necesitas mostrar solo las habitaciones disponibles

        // Retornar la vista con las habitaciones
        return view('habitaciones.index', compact('habitaciones'));
    }
}
