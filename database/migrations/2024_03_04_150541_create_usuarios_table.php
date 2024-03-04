<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 80);
            $table->string('nombreUsuario', 50)->unique();
            $table->string('contrasena', 255);
            $table->enum('rol', ['superUsuario', 'contador', 'administrador', 'repreLegal', 'juntaDirectiva', 'revisorFiscal', 'propietario', 'proveedor', 'cliente', 'inmobiliaria', 'normalUser'])->default('normalUser');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
};

