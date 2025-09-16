<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    public function run()
    {
        DB::table('categorias')->insert([
            ['nombre' => 'Programación', 'descripcion' => 'Cursos de desarrollo de software'],
            ['nombre' => 'Diseño', 'descripcion' => 'Cursos de diseño gráfico y web'],
            ['nombre' => 'Negocios', 'descripcion' => 'Cursos de administración y emprendimiento'],
        ]);
    }
}
