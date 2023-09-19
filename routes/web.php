<?php

use App\Http\Controllers\PersonasController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\CursosController;

Route::get('/', [PersonasController::class, 'index'])->name('personas.index');
Route::get('/create', [PersonasController::class, 'create'])->name('personas.create');
Route::post('/store', [PersonasController::class, 'store'])->name('personas.store');
Route::get('/edit/{id}', [PersonasController::class, 'edit'])->name('personas.edit');
Route::put('/update/{id}', [PersonasController::class, 'update'])->name('personas.update');
Route::get('/show/{id}', [PersonasController::class, 'show'])->name('personas.show');
Route::delete('/destroy/{id}', [PersonasController::class, 'destroy'])->name('personas.destroy');

/*Route::get('/', [CursosController::class, 'index'])->name('cursos.index');
Route::get('/create', [CursosController::class, 'create'])->name('cursos.create');
Route::post('/store', [CursosController::class, 'store'])->name('cursos.store');
Route::get('/edit/{id}', [CursosController::class, 'edit'])->name('cursos.edit');
Route::put('/update/{id}', [CursosController::class, 'update'])->name('cursos.update');
Route::get('/show/{id}', [CursosController::class, 'show'])->name('cursos.show');
Route::delete('/destroy/{id}', [CursosController::class, 'destroy'])->name('cursos.destroy');*/