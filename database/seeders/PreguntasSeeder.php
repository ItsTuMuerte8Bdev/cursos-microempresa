<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PreguntasSeeder extends Seeder
{
    public function run()
    {
        DB::table('preguntas')->insert([
            [
                'id_evaluacion' => 1,
                'enunciado' => '¿Laravel es un framework de PHP?',
                'tipo' => 'verdadero_falso',
                'puntaje' => 1,
            ],
        ]);
    }
}
