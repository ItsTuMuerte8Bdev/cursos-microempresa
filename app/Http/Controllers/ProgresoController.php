<?php
namespace App\Http\Controllers;

use App\Models\Progreso;
use Illuminate\Http\Request;

class ProgresoController extends Controller
{
    public function index(Request $request)
    {
        $query = Progreso::query();
        if ($request->has('id_usuario')) {
            $query->where('id_usuario', $request->id_usuario);
        }
        return $query->with(['usuario', 'leccion'])->get();
    }

    public function store(Request $request)
    {
        $progreso = Progreso::create($request->all());
        return response()->json($progreso, 201);
    }
}
