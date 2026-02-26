<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();  // Obtener todos los usuarios
        return view('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nombre' => 'required',
            'Apellido' => 'required',
            'email' => 'required|email|unique:usuarios,email',
            'contraseña' => 'required',
            'DNI' => 'required',
            'Numero' => 'required',
            'Rol' => 'required',
        ]);

        Usuario::create($request->all());

        return redirect()->route('usuarios.index');
    }
}