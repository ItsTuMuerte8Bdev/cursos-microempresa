<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeccionesSeeder extends Seeder
{
    public function run()
    {
        DB::table('lecciones')->insert([
            [
                'id_modulo' => 1,
                'titulo' => '¿Qué es Laravel?',
                'contenido' => 'Laravel es un framework de PHP...',
                'tipo' => 'teoria',
                'recurso_url' => null,
            ],
            [
                'id_modulo' => 2,
                'titulo' => 'Definiendo rutas',
                'contenido' => 'Las rutas en Laravel se definen en el archivo routes/web.php...',
                'tipo' => 'teoria',
                'recurso_url' => null,
            ],
        ]);
    }
}
