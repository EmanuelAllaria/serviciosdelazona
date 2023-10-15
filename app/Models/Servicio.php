<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = [
        'nombre_servicio', 'descripcion_servicio', 'tarifa', 'categoria', 'proveedor_servicio_id', 'disponible'
    ];

    // Relaciones
    public function proveedorServicio()
    {
        return $this->belongsTo(Usuario::class, 'proveedor_servicio_id');
    }
    
    public function solicitudesServicio()
    {
        return $this->hasMany(SolicitudServicio::class, 'servicio_solicitado_id');
    }
}
