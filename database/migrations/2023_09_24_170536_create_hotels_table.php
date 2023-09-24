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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('ubicacion');
            $table->string('clasificacion');
            $table->string('tipo_habitacion');
            $table->decimal('precio_habitacion', 8, 2);
            $table->string('facilidad_servicios');
            $table->string('politicas');
            $table->string('contacto');
            $table->string('Disponibilidad');
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
        Schema::dropIfExists('hotels');
    }
};
