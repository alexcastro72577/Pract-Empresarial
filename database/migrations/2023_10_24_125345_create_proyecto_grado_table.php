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
        Schema::create('proyecto_grados', function (Blueprint $table) {
            $table->id();
            $table->string('codSidoc');
            $table->string('nombreProyecto');
            $table->integer('id_fecha')->nullable();
            $table->integer('id_estudiante')->nullable();
            $table->foreign('id_fecha')->references('id')->on('fechas');
            $table->foreign('id_estudiante')->references('id')->on('estudiantes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyecto_grados');
    }
};
