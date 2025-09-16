<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EvaluacionesSeeder extends Seeder
{
    public function run()
    {
        DB::table('evaluaciones')->insert([
            [
                'id_modulo' => 1,
                'titulo' => 'Quiz de introducción',
                'descripcion' => 'Preguntas básicas sobre Laravel.',
                'tipo' => 'quiz',
            ],
        ]);
    }
}
