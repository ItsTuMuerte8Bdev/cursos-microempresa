<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProgresoSeeder extends Seeder
{
    public function run()
    {
        DB::table('progreso')->insert([
            [
                'id_usuario' => 3,
                'id_leccion' => 1,
                'completado' => true,
                'fecha_completado' => now(),
            ],
        ]);
    }
}
