<?php

// database/migrations/{timestamp}_create_reservas_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id('ID_Reserva');
            $table->unsignedBigInteger('IDusuario');
            $table->unsignedBigInteger('IDhabitacion');
            $table->integer('N°_personas');
            $table->string('estado');
            $table->date('H_entrada');
            $table->date('H_salida');
            $table->decimal('Precio_Total', 10, 2);

            // Definir las claves foráneas
            $table->foreign('IDusuario')->references('IDusuario')->on('usuarios')->onDelete('cascade');
            $table->foreign('IDhabitacion')->references('IDhabitacion')->on('habitaciones')->onDelete('cascade');
            
            $table->timestamps();
        });

        // Asegura que la tabla use InnoDB
        DB::statement('ALTER TABLE reservas ENGINE = InnoDB');
    }

    public function down(): void
    {
        Schema::dropIfExists('reservas');
    }
};