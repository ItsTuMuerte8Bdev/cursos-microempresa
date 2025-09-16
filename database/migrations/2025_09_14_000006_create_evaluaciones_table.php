<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('evaluaciones', function (Blueprint $table) {
            $table->id('id_evaluacion');
            $table->unsignedBigInteger('id_modulo');
            $table->string('titulo', 200);
            $table->text('descripcion')->nullable();
            $table->enum('tipo', ['quiz', 'practica', 'examen_final'])->default('quiz');
            $table->foreign('id_modulo')->references('id_modulo')->on('modulos');
        });
    }
    public function down() {
        Schema::dropIfExists('evaluaciones');
    }
};
