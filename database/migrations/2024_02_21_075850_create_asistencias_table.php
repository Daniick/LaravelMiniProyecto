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
        Schema::create('asistencias', function (Blueprint $table) {
            $table->id();
            $table->foreignId("alumno_id")->constrained('alumnos');
            $table->foreignId("curso_id")->constrained('cursos');
            $table->foreignId("maestro_id")->constrained('maestros');
            $table->foreignId("tipo_asistencia_id")->constrained('tipo_asistencias');
            $table->dateTime("fecha");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencias');
    }
};
