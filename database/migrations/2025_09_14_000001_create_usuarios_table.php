<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('id_usuario');
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('correo', 150)->unique();
            $table->string('password', 255);
            $table->enum('rol', ['admin', 'instructor', 'empleado'])->default('empleado');
            $table->string('proveedor_oauth', 50)->nullable();
            $table->string('proveedor_id', 150)->nullable();
            $table->timestamp('fecha_registro')->useCurrent();
            $table->enum('estado', ['activo', 'inactivo'])->default('activo');
        });
    }
    public function down() {
        Schema::dropIfExists('usuarios');
    }
};
