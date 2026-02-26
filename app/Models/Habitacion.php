<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitacion extends Model
{
    use HasFactory;

    // Si la tabla tiene un nombre diferente, puedes especificarlo aquí
    protected $table = 'habitaciones';

    // Atributos que pueden ser asignados de manera masiva
    protected $fillable = [
        'Tipo_habitacion',
        'precio_dia',
        'estado',
        'N°_habitacion',
        'capacidad_maxima'
    ];

    // Relación con la tabla 'reservas' (una habitación puede tener muchas reservas)
    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'ID_habitacion');
    }
}