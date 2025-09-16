<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ResultadosSeeder extends Seeder
{
    public function run()
    {
        DB::table('resultados')->insert([
            [
                'id_usuario' => 3,
                'id_evaluacion' => 1,
                'puntaje_obtenido' => 1,
                'fecha' => now(),
            ],
        ]);
    }
}
