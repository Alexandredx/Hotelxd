<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    use HasFactory;

    // La tabla asociada al modelo
    protected $table = 'reservas';  // Si es diferente al nombre de la tabla, puedes especificarlo.

    // Los atributos que pueden ser asignados de manera masiva
    protected $fillable = [
        'ID_usuario', 
        'ID_habitacion',
        'N°_personas', 
        'estado', 
        'H_entrada', 
        'H_salida', 
        'Precio_Total'
    ];

    // Relación con el modelo Usuario (Una reserva pertenece a un usuario)
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'ID_usuario');
    }

    // Relación con el modelo Habitacion (Una reserva pertenece a una habitación)
    public function habitacion()
    {
        return $this->belongsTo(Habitacion::class, 'ID_habitacion');
    }
}
