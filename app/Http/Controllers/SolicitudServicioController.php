<?php

namespace App\Http\Controllers;

use App\SolicitudServicio;
use Illuminate\Http\Request;

class SolicitudServicioController extends Controller
{
    public function index()
    {
        // Listar todas las solicitudes de servicio
        $solicitudes = SolicitudServicio::all();
        return response()->json($solicitudes);
    }

    public function store(Request $request)
    {
        // Crear una nueva solicitud de servicio
        $solicitud = new SolicitudServicio($request->all());
        $solicitud->save();
        return response()->json($solicitud, 201);
    }

    public function show($id)
    {
        // Mostrar una solicitud de servicio específica
        $solicitud = SolicitudServicio::find($id);
        return response()->json($solicitud);
    }

    public function update(Request $request, $id)
    {
        // Actualizar los detalles de una solicitud de servicio
        $solicitud = SolicitudServicio::find($id);
        $solicitud->update($request->all());
        return response()->json($solicitud, 200);
    }

    public function destroy($id)
    {
        // Eliminar una solicitud de servicio
        SolicitudServicio::destroy($id);
        return response()->json(null, 204);
    }
}
