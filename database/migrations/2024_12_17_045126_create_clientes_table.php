<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); // id (clave primaria, auto-incremental)
            $table->string('nombre', 100); // nombre del cliente
            $table->string('numero_de_telefono', 15)->nullable(); // número de teléfono
            $table->tinyInteger('edad')->nullable(); // edad del cliente
            $table->enum('sexo', ['M', 'F', 'O'])->nullable(); // sexo del cliente: Masculino, Femenino u Otro
            $table->boolean('estatus')->default(1); // estatus: 1 = Activo, 0 = Inactivo

            $table->string('calle', 100)->nullable();
            $table->string('numero_exterior', 10)->nullable();
            $table->string('numero_interior', 10)->nullable();
            $table->string('colonia', 100)->nullable();
            $table->string('ciudad', 100)->default('Iguala');
            $table->string('estado', 100)->default('Guerrero');
            $table->string('codigo_postal', 10)->nullable();
            $table->string('pais', 50)->default('México');

            $table->timestamp('fecha_de_creacion')->useCurrent(); // fecha de creación
            $table->timestamp('fecha_de_actualizacion')->useCurrent()->useCurrentOnUpdate(); // fecha de actualización
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
