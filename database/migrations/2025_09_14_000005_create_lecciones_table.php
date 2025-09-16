<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('lecciones', function (Blueprint $table) {
            $table->id('id_leccion');
            $table->unsignedBigInteger('id_modulo');
            $table->string('titulo', 200);
            $table->text('contenido')->nullable();
            $table->enum('tipo', ['teoria', 'video', 'practica'])->default('teoria');
            $table->string('recurso_url', 255)->nullable();
            $table->foreign('id_modulo')->references('id_modulo')->on('modulos');
        });
    }
    public function down() {
        Schema::dropIfExists('lecciones');
    }
};
