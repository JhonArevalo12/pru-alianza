<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Nombre del empleado
            $table->string('email')->unique(); // Correo electrónico único
            $table->string('password'); // Contraseña
            $table->rememberToken(); // Token para recordar la sesión
            $table->timestamps(); // Timestamps para created_at y updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('employees');
    }
}