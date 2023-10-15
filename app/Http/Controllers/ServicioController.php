<?php

namespace App\Http\Controllers;

use App\Servicio;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    public function index()
    {
        // Listar todos los servicios
        $servicios = Servicio::all();
        return response()->json($servicios);
    }

    public function store(Request $request)
    {
        // Crear un nuevo servicio
        $servicio = new Servicio($request->all());
        $servicio->save();
        return response()->json($servicio, 201);
    }

    public function show($id)
    {
        // Mostrar un servicio específico
        $servicio = Servicio::find($id);
        return response()->json($servicio);
    }

    public function update(Request $request, $id)
    {
        // Actualizar los detalles de un servicio
        $servicio = Servicio::find($id);
        $servicio->update($request->all());
        return response()->json($servicio, 200);
    }

    public function destroy($id)
    {
        // Eliminar un servicio
        Servicio::destroy($id);
        return response()->json(null, 204);
    }
}
