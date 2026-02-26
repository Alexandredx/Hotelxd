<?php

// database/migrations/{timestamp}_create_pagos_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id('ID_pagos');
            $table->unsignedBigInteger('ID_Reserva');
            $table->string('Tipo_pago');
            $table->decimal('Monto_pagado', 10, 2);
            
            // Definir la clave foránea
            $table->foreign('ID_Reserva')->references('ID_Reserva')->on('reservas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pagos');
    }
};