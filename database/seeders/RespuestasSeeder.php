<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespuestasSeeder extends Seeder
{
    public function run()
    {
        DB::table('respuestas')->insert([
            [
                'id_pregunta' => 1,
                'texto' => 'Verdadero',
                'es_correcta' => true,
            ],
            [
                'id_pregunta' => 1,
                'texto' => 'Falso',
                'es_correcta' => false,
            ],
        ]);
    }
}
