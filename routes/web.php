<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\PageController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard',[PageController::class,'Dashboard'])
    ->middleware('auth:sanctum')
    ->name('dashboard');

#Creamos una ruta de recursos para que genere las 7 rutas del CRUD
Route::resource('notes',NoteController::class)
    ->middleware('auth:sanctum');