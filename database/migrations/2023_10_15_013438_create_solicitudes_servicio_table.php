<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSolicitudesServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes_servicio', function (Blueprint $table) {
            $table->id();
            $table->text('descripcion_solicitud');
            $table->timestamp('fecha_hora_solicitud');
            $table->string('ubicacion_solicitud');
            $table->string('estado_solicitud');
            $table->unsignedBigInteger('proveedor_asignado_id');
            $table->unsignedBigInteger('usuario_solicitante_id');
            $table->unsignedBigInteger('servicio_solicitado_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes_servicio');
    }
}
