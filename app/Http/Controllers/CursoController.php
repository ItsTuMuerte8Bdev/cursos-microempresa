<?php
namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        return Curso::with(['categoria', 'creador', 'modulos'])->get();
    }

    public function show($id)
    {
        return Curso::with(['categoria', 'creador', 'modulos.lecciones', 'modulos.evaluaciones'])->findOrFail($id);
    }

    public function store(Request $request)
    {
        $curso = Curso::create($request->all());
        return response()->json($curso, 201);
    }
}
