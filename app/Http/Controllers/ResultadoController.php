<?php
namespace App\Http\Controllers;

use App\Models\Resultado;
use Illuminate\Http\Request;

class ResultadoController extends Controller
{
    public function index(Request $request)
    {
        $query = Resultado::query();
        if ($request->has('id_usuario')) {
            $query->where('id_usuario', $request->id_usuario);
        }
        return $query->with(['usuario', 'evaluacion'])->get();
    }

    public function store(Request $request)
    {
        $resultado = Resultado::create($request->all());
        return response()->json($resultado, 201);
    }
}
