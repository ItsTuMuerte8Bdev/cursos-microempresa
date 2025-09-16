<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificacionesSeeder extends Seeder
{
    public function run()
    {
        DB::table('notificaciones')->insert([
            [
                'id_usuario' => 3,
                'mensaje' => '¡Bienvenido al curso Laravel desde cero!',
                'leido' => false,
                'fecha_envio' => now(),
            ],
        ]);
    }
}
