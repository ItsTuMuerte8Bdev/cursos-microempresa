<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('resultados', function (Blueprint $table) {
            $table->id('id_resultado');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_evaluacion');
            $table->integer('puntaje_obtenido');
            $table->timestamp('fecha')->useCurrent();
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_evaluacion')->references('id_evaluacion')->on('evaluaciones');
        });
    }
    public function down() {
        Schema::dropIfExists('resultados');
    }
};
