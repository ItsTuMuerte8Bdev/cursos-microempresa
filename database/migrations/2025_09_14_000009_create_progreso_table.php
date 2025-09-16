<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('progreso', function (Blueprint $table) {
            $table->id('id_progreso');
            $table->unsignedBigInteger('id_usuario');
            $table->unsignedBigInteger('id_leccion');
            $table->boolean('completado')->default(false);
            $table->timestamp('fecha_completado')->nullable();
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
            $table->foreign('id_leccion')->references('id_leccion')->on('lecciones');
        });
    }
    public function down() {
        Schema::dropIfExists('progreso');
    }
};
