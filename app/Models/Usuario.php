<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    // Definir la tabla si el nombre del modelo no es el mismo que la tabla
    // protected $table = 'usuarios'; // Si necesitas personalizar el nombre de la tabla

    // Si necesitas permitir asignación masiva en ciertas columnas:
    protected $fillable = [
        'Nombre',
        'Apellido',
        'email',
        'contraseña',
        'DNI',
        'Numero',
        'Rol',
    ];

    // Relación con la tabla reservas (un usuario puede tener muchas reservas)
    public function reservas()
    {
        return $this->hasMany(Reserva::class, 'ID_usuario');
    }
}