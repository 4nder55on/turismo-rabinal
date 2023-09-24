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
        Schema::create('registro_visitantes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->references('id')->on('clientes');
            $table->foreignId('lugar')->references('id')->on('lugar_recreativos');
            $table->string('fecha');
            $table->string('hora_entrada');
            $table->string('hora_salida');
            $table->string('tipo_visita');
            $table->decimal('costo_total', 8, 2);
            $table->string('servicios_utilizados');
            $table->string('observaciones');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_visitantes');
    }
};
