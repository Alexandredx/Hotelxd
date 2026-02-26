<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;

    // La tabla asociada al modelo
    protected $table = 'pagos'; // Si la tabla tiene un nombre diferente a "pagos", especifica el nombre.

    // Atributos que pueden ser asignados de manera masiva
    protected $fillable = [
        'ID_Reserva',
        'Tipo_pago',
        'Monto_pagado'
    ];

    // Relación con el modelo Reserva (Un pago pertenece a una reserva)
    public function reserva()
    {
        return $this->belongsTo(Reserva::class, 'ID_Reserva');
    }
}