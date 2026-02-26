<?php

// database/migrations/{timestamp}_create_users_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('IDusuario');  // Clave primaria como unsignedBigInteger
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('email')->unique();  // Correo electrónico único
            $table->string('contraseña');
            $table->string('DNI');
            $table->string('Numero');
            $table->string('Rol');  // Puede ser 'usuario', 'administrador', etc.
            $table->timestamps();
        });

        // Asegura que la tabla use InnoDB
        DB::statement('ALTER TABLE usuarios ENGINE = InnoDB');
    }

    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
