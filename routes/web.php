<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/team', [TeamController::class, 'index'])->name('team.index');
Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');

Route::get('/todo', [TodoController::class, 'index'])->name('todo.index');
Route::post('/todo', [TodoController::class, 'store'])->name('todo.store');
Route::delete('/todo/{id}', [TodoController::class, 'destroy'])->name('todo.destroy');
Route::get('/todo/{id}', [TodoController::class, 'show'])->name('todo.show');
Route::get('/todo/{id}/edit', [TodoController::class, 'edit'])->name('todo.edit');
Route::put('/todo/{id}', [TodoController::class, 'update'])->name('todo.update');