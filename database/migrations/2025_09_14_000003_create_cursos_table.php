<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id('id_curso');
            $table->string('titulo', 200);
            $table->text('descripcion')->nullable();
            $table->unsignedBigInteger('id_categoria')->nullable();
            $table->enum('nivel', ['basico', 'intermedio', 'avanzado'])->default('basico');
            $table->unsignedBigInteger('creado_por')->nullable();
            $table->timestamp('fecha_creacion')->useCurrent();
            $table->enum('estado', ['activo', 'inactivo'])->default('activo');
            $table->foreign('id_categoria')->references('id_categoria')->on('categorias');
            $table->foreign('creado_por')->references('id_usuario')->on('usuarios');
        });
    }
    public function down() {
        Schema::dropIfExists('cursos');
    }
};
