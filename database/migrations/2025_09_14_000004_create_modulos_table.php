<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('modulos', function (Blueprint $table) {
            $table->id('id_modulo');
            $table->unsignedBigInteger('id_curso');
            $table->string('titulo', 200);
            $table->text('descripcion')->nullable();
            $table->integer('orden');
            $table->foreign('id_curso')->references('id_curso')->on('cursos');
        });
    }
    public function down() {
        Schema::dropIfExists('modulos');
    }
};
