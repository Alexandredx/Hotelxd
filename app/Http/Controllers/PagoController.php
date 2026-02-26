<?php

namespace App\Http\Controllers;

use App\Models\Pago;
use App\Models\Reserva;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pago::with('reserva')->get();  // Obtener todos los pagos con las reservas relacionadas
        return view('pagos.index', compact('pagos'));
    }

    public function create()
    {
        $reservas = Reserva::all();
        return view('pagos.create', compact('reservas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'ID_Reserva' => 'required|exists:reservas,ID_Reserva',
            'Tipo_pago' => 'required',
            'Monto_pagado' => 'required|numeric',
        ]);

        Pago::create($request->all());

        return redirect()->route('pagos.index');
    }
}