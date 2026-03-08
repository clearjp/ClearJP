<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Creo la tabla donde se guardan las solicitudes de reserva rapida.
     */
    public function up(): void
    {
        Schema::create('reservas_rapidas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 120);
            $table->string('telefono', 30);
            $table->string('tipo_servicio', 50);
            $table->date('fecha_preferida')->nullable();

            // Estado simple para seguimiento operativo del equipo.
            $table->string('estado', 20)->default('pendiente');

            $table->timestamps();
        });
    }

    /**
     * Elimino la tabla si se revierte la migracion.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas_rapidas');
    }
};