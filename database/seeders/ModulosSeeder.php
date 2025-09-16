<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModulosSeeder extends Seeder
{
    public function run()
    {
        DB::table('modulos')->insert([
            [
                'id_curso' => 1,
                'titulo' => 'Introducción a Laravel',
                'descripcion' => 'Conceptos básicos y estructura.',
                'orden' => 1,
            ],
            [
                'id_curso' => 1,
                'titulo' => 'Rutas y Controladores',
                'descripcion' => 'Cómo funcionan las rutas y controladores.',
                'orden' => 2,
            ],
        ]);
    }
}
