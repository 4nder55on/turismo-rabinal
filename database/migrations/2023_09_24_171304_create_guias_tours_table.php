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
        Schema::create('guias_tours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guia_id')->references('id')->on('guias');
            $table->string('nombre');
            $table->string('descripcion');
            $table->date('fecha_inicio');
            $table->integer('duracion');
            $table->decimal('precio', 8, 2);
            $table->string('informacion_contacto');
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
        Schema::dropIfExists('guias_tours');
    }
};
