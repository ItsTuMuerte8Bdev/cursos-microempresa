<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuariosSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            [
                'nombre' => 'Admin',
                'apellido' => 'Principal',
                'correo' => 'admin@demo.com',
                'password' => Hash::make('admin123'),
                'rol' => 'admin',
                'proveedor_oauth' => null,
                'proveedor_id' => null,
                'estado' => 'activo',
            ],
            [
                'nombre' => 'Juan',
                'apellido' => 'Instructor',
                'correo' => 'juan@demo.com',
                'password' => Hash::make('instructor123'),
                'rol' => 'instructor',
                'proveedor_oauth' => null,
                'proveedor_id' => null,
                'estado' => 'activo',
            ],
            [
                'nombre' => 'Ana',
                'apellido' => 'Empleado',
                'correo' => 'ana@demo.com',
                'password' => Hash::make('empleado123'),
                'rol' => 'empleado',
                'proveedor_oauth' => null,
                'proveedor_id' => null,
                'estado' => 'activo',
            ],
        ]);
    }
}
