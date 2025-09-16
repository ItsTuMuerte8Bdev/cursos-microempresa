<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursosSeeder extends Seeder
{
    public function run()
    {
        DB::table('cursos')->insert([
            [
                'titulo' => 'Laravel desde cero',
                'descripcion' => 'Aprende a crear aplicaciones web con Laravel.',
                'id_categoria' => 1,
                'nivel' => 'basico',
                'creado_por' => 2,
                'estado' => 'activo',
            ],
            [
                'titulo' => 'Diseño UX/UI',
                'descripcion' => 'Fundamentos de experiencia de usuario y diseño de interfaces.',
                'id_categoria' => 2,
                'nivel' => 'intermedio',
                'creado_por' => 2,
                'estado' => 'activo',
            ],
        ]);
    }
}
