<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->id('id_notificacion');
            $table->unsignedBigInteger('id_usuario');
            $table->text('mensaje');
            $table->boolean('leido')->default(false);
            $table->timestamp('fecha_envio')->useCurrent();
            $table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
        });
    }
    public function down() {
        Schema::dropIfExists('notificaciones');
    }
};
