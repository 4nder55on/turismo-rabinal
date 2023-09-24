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
        Schema::create('resenas_calificaciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lugar_id')->references('id')->on('lugar_recreativos');
            $table->foreignId('usuario_id')->references('id')->on('users');
            $table->string('resena');
            $table->integer('calificacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resenas_calificaciones');
    }
};
