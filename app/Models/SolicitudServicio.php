<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SolicitudServicio extends Model
{
    protected $fillable = [
        'descripcion_solicitud', 'fecha_hora_solicitud', 'ubicacion_solicitud', 'estado_solicitud', 'proveedor_asignado_id', 'usuario_solicitante_id', 'servicio_solicitado_id'
    ];

    // Relaciones
    public function proveedorAsignado()
    {
        return $this->belongsTo(Usuario::class, 'proveedor_asignado_id');
    }

    public function usuarioSolicitante()
    {
        return $this->belongsTo(Usuario::class, 'usuario_solicitante_id');
    }

    public function servicioSolicitado()
    {
        return $this->belongsTo(Servicio::class, 'servicio_solicitado_id');
    }
}
