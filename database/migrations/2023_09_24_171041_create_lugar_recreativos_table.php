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
        Schema::create('lugar_recreativos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('tipo_lugar');
            $table->string('ubicacion');
            $table->string('horario');
            $table->decimal('precio', 8, 2);
            $table->string('facilidades');
            $table->string('actividades');
            $table->string('atracciones_destacadas');
            $table->string('calificacion');
            $table->string('contacto');
            $table->string('temporada_alta');
            $table->string('temporada_baja');
            $table->string('accessibilidad');
            $table->string('restricciones_edad');
            $table->string('eventos_especiales');
            $table->string('regulaciones');
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
        Schema::dropIfExists('lugar_recreativos');
    }
};
