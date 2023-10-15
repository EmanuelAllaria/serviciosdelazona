<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index()
    {
        // Listar todos los usuarios
        $usuarios = Usuario::all();
        return response()->json($usuarios);
    }

    public function store(Request $request)
    {
        // Crear un nuevo usuario
        $usuario = new Usuario($request->all());
        $usuario->save();
        return response()->json($usuario, 201);
    }

    public function show($id)
    {
        // Mostrar un usuario específico
        $usuario = Usuario::find($id);
        return response()->json($usuario);
    }

    public function update(Request $request, $id)
    {
        // Actualizar los detalles de un usuario
        $usuario = Usuario::find($id);
        $usuario->update($request->all());
        return response()->json($usuario, 200);
    }

    public function destroy($id)
    {
        // Eliminar un usuario
        Usuario::destroy($id);
        return response()->json(null, 204);
    }
}
