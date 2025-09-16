<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('preguntas', function (Blueprint $table) {
            $table->id('id_pregunta');
            $table->unsignedBigInteger('id_evaluacion');
            $table->text('enunciado');
            $table->enum('tipo', ['opcion_multiple', 'verdadero_falso', 'abierta'])->default('opcion_multiple');
            $table->integer('puntaje')->default(1);
            $table->foreign('id_evaluacion')->references('id_evaluacion')->on('evaluaciones');
        });
    }
    public function down() {
        Schema::dropIfExists('preguntas');
    }
};
