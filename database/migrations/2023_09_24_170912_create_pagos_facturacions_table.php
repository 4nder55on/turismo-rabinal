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
        Schema::create('pagos_facturacions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reserva_id')->references('id')->on('reserva_alojamientos');
            $table->decimal('monto', 8, 2);
            $table->string('tipo_pago');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagos_facturacions');
    }
};
