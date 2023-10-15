<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $fillable = [
        'nombre', 'apellido', 'correo_electronico', 'contrasena', 'tipo_usuario', 'ubicacion', 'telefono', 'foto_perfil'
    ];

    // Relaciones
    public function servicios()
    {
        return $this->hasMany(Servicio::class, 'proveedor_servicio_id');
    }

    public function solicitudesServicio()
    {
        return $this->hasMany(SolicitudServicio::class, 'usuario_solicitante_id');
    }
}
