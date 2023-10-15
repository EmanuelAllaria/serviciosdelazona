<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\SolicitudServicioController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para el controlador de Usuario
Route::apiResource('usuarios', UsuarioController::class);

// Rutas para el controlador de Servicio
Route::apiResource('servicios', ServicioController::class);

// Rutas para el controlador de Solicitud de Servicio
Route::apiResource('solicitudes-servicio', SolicitudServicioController::class);
