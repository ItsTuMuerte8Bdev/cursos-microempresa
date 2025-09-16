<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\ProgresoController;
use App\Http\Controllers\ResultadoController;

Route::get('/cursos', [CursoController::class, 'index']);
Route::get('/cursos/{id}', [CursoController::class, 'show']);
Route::post('/cursos', [CursoController::class, 'store']);

Route::get('/cursos/{id}/modulos', [ModuloController::class, 'index']);

Route::get('/progreso', [ProgresoController::class, 'index']);
Route::post('/progreso', [ProgresoController::class, 'store']);

Route::get('/resultados', [ResultadoController::class, 'index']);
Route::post('/resultados', [ResultadoController::class, 'store']);
