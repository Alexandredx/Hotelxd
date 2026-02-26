<?php

// database/migrations/{timestamp}_create_habitaciones_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('habitaciones', function (Blueprint $table) {
            $table->id('IDhabitacion');  // Clave primaria
            $table->string('Tipo_habitacion');
            $table->decimal('precio_dia', 10, 2);
            $table->string('estado');
            $table->integer('N°_habitacion');
            $table->integer('capacidad_maxima');
            $table->timestamps();
        });

        // Asegura que la tabla use InnoDB
        DB::statement('ALTER TABLE habitaciones ENGINE = InnoDB');
    }

    public function down(): void
    {
        Schema::dropIfExists('habitaciones');
    }
};