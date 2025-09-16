<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('respuestas', function (Blueprint $table) {
            $table->id('id_respuesta');
            $table->unsignedBigInteger('id_pregunta');
            $table->string('texto', 255);
            $table->boolean('es_correcta')->default(false);
            $table->foreign('id_pregunta')->references('id_pregunta')->on('preguntas');
        });
    }
    public function down() {
        Schema::dropIfExists('respuestas');
    }
};
