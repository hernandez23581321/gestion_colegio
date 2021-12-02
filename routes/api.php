<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\MatriculaController;
use App\Http\Controllers\PadreController;
use App\Http\Controllers\MateriaController;
use App\Http\Controllers\GradoController;
use App\Http\Controllers\CatedraticoController;
use App\Http\Controllers\GradoMateriaController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\CatedraticoMateriaController;
use App\Http\Controllers\NotasParcialesController;
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Rutas para usuarios
Route::get('/usuarios', [UsuarioController::class,'index']);
Route::post('/usuarios', [UsuarioController::class,'store']);
Route::put('/usuarios/{id}', [UsuarioController::class,'update']);
Route::delete('/usuarios/{id}', [UsuarioController::class,'destroy']);

// Rutas para matriculas
Route::get('/matricula', [MatriculaController::class,'index']);
Route::post('/matricula', [MatriculaController::class,'store']);
Route::put('/matricula/{id}', [MatriculaController::class,'update']);
Route::delete('/matricula/{id}', [MatriculaController::class,'destroy']);

// Rutas para materias
Route::get('/materia', [MateriaController::class,'index']);
Route::post('/materia', [MateriaController::class,'store']);
Route::put('/materia/{id}', [MateriaController::class,'update']);
Route::delete('/materia/{id}', [MateriaController::class,'destroy']);

// Rutas para grados
Route::get('/grado', [GradoController::class,'index']);
Route::post('/grado', [GradoController::class,'store']);
Route::put('/grado/{id}', [GradoController::class,'update']);
Route::delete('/grado/{id}',[GradoController::class,'destroy']);


// Rutas para catedraticos
Route::get('/catedratico', [CatedraticoController::class,'index']);
Route::post('/catedratico', [CatedraticoController::class,'store']);
Route::put('/catedratico/{id}', [CatedraticoController::class,'update']);
Route::delete('/catedratico/{id}',[CatedraticoController::class,'destroy']);

// Rutas para padres
Route::get('/padres', [PadreController::class,'index']);
Route::post('/padres', [PadreController::class,'store']);
Route::put('/padres/{id}', [PadreController::class,'update']);
Route::delete('/padres/{id}',[PadreController::class,'destroy']);

// Rutas para gradoMateria
Route::get('/grado_materia', [GradoMateriaController::class,'index']);
Route::post('/grado_materia', [GradoMateriaController::class,'store']);
Route::put('/grado_materia/{id}', [GradoMateriaController::class,'update']);
Route::delete('/grado_materia/{id}',[GradoMateriaController::class,'destroy']);
// Rutas para alumnos
Route::get('/alumnos', [AlumnoController::class,'index']);
Route::post('/alumnos', [AlumnoController::class,'store']);
Route::put('/alumnos/{id}', [AlumnoController::class,'update']);
Route::delete('/alumnos/{id}',[AlumnoController::class,'destroy']);

// Rutas para catedraticoMaterias
Route::get('/catedratico_materia', [CatedraticoMateriaController::class,'index']);
Route::post('/catedratico_materia', [CatedraticoMateriaController::class,'store']);
Route::put('/catedratico_materia/{id}', [CatedraticoMateriaController::class,'update']);
Route::delete('/catedratico_materia/{id}',[CatedraticoMateriaController::class,'destroy']);

// Rutas para notasparciales
Route::get('/notas', [NotasParcialesController::class,'index']);
Route::post('/notas', [NotasParcialesController::class,'store']);
Route::put('/notas/{id}', [NotasParcialesController::class,'update']);
Route::delete('/notas/{id}',[NotasParcialesController::class,'destroy']);