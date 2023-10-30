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
        Schema::create('repositorio__documentos', function (Blueprint $table) {
            $table->id();
            $table->Integer('id_estudiante');
            $table->string('tipoDocumento');
            $table->string('documento');
            $table->foreign('id_estudiante')->references('id')->on('estudiantes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repositorio__documentos');
    }
};
