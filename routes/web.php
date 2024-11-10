<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EstudanteController;
use App\Http\Controllers\SalaController;


// Rotas para o CRUD de estudantes
Route::get('/estudantes', [EstudanteController::class, 'index'])->name('estudantes.index');
Route::get('/estudantes/create', [EstudanteController::class, 'create'])->name('estudantes.create');
Route::post('/estudantes', [EstudanteController::class, 'store'])->name('estudantes.store');
Route::get('estudantes/{estudante}', [EstudanteController::class, 'show'])->name('estudantes.show');
Route::get('/estudantes/{estudante}/edit', [EstudanteController::class, 'edit'])->name('estudantes.edit');
Route::put('/estudantes/{estudante}', [EstudanteController::class, 'update'])->name('estudantes.update');
Route::delete('/estudantes/{estudante}', [EstudanteController::class, 'destroy'])->name('estudantes.destroy');



// Rotas para o CRUD de salas
Route::get('/salas', [SalaController::class, 'index'])->name('salas.index');
Route::get('/salas/create', [SalaController::class, 'create'])->name('salas.create');
Route::post('/salas', [SalaController::class, 'store'])->name('salas.store');
Route::get('/salas/{id}', [SalaController::class, 'show'])->name('salas.show');
Route::get('/salas/{id}/edit', [SalaController::class, 'edit'])->name('salas.edit');
Route::put('/salas/{id}', [SalaController::class, 'update'])->name('salas.update');
Route::delete('/salas/{id}', [SalaController::class, 'destroy'])->name('salas.destroy');
