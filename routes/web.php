<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UniverseController;
use App\Http\Controllers\SuperheroController;

Route::get('/', function () { return view('welcome'); });

// Estas dos líneas crean las 14 rutas (7 y 7) necesarias para el CRUD
Route::resource('universes', UniverseController::class);
Route::resource('superheroes', SuperheroController::class);