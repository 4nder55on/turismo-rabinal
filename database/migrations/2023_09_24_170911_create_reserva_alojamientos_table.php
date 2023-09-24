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
        Schema::create('reserva_alojamientos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('hotel_id')->constrained('hotels');
            $table->date('fecha_entrada');
            $table->date('fecha_salida');
            $table->string('tipo_habitacion');
            $table->decimal('precio_habitacion', 8, 2);
            $table->string('estado_pago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reserva_alojamientos');
    }
};
