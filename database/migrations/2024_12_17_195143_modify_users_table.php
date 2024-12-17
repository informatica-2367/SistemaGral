<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Crear una nueva tabla users con la estructura correcta
        Schema::create('new_users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('password');
            $table->timestamps(); // Esto crea created_at y updated_at
        });

        // Transferir los datos desde la tabla original a la nueva
        DB::table('new_users')->insert(
            DB::table('users')->get(['id', 'name', 'password'])->toArray()
        );

        // Eliminar la tabla antigua
        Schema::dropIfExists('users');

        // Renombrar la nueva tabla a "users"
        Schema::rename('new_users', 'users');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Volver a crear la tabla original si es necesario
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        // Restaurar los datos si fuera necesario
        DB::table('users')->insert(
            DB::table('new_users')->get(['id', 'name', 'email', 'password'])->toArray()
        );

        // Eliminar la tabla temporal
        Schema::dropIfExists('new_users');
    }
};
