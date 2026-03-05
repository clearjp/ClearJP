<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * ejecuto las migraciones.
     */
    public function up(): void
    {
        // creo la tabla de caché.
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
            $table->integer('expiration');
        });

        // creo la tabla de bloqueos de caché.
        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('owner');
            $table->integer('expiration');
        });
    }

    /**
     * revierto las migraciones.
     */
    public function down(): void
    {
        // elimino las tablas de caché.
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
    }
};
