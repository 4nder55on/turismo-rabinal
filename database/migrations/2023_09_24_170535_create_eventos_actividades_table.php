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
        Schema::create('eventos_actividades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion', 500);
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->string('lugar');
            $table->string('tarifa');
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
        Schema::dropIfExists('eventos_actividades');
    }
};
