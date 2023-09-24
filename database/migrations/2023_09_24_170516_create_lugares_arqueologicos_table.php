<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lugares_arqueologicos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('ubicacion');
            $table->string('periodo_historico');
            $table->string('tipo_sitio');
            $table->string('estructuras_destacadas');
            $table->string('hallazgos_destacados');
            $table->string('importancia_cultural');
            $table->string('restricciones');
            $table->string('accesibilidad');
            $table->string('horario_visita');
            $table->string('costo_entrada');
            $table->string('contacto');
            $table->string('eventos_especiales');
            $table->string('slug');
            $table->string('image_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lugares_arqueologicos');
    }
};
