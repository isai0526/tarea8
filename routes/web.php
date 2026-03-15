<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universe;
use App\Models\Superhero;
use App\Models\Superpower;
use App\Http\Controllers\UniverseController;

Route::get('/universes',[UniverseController::class,'index']);
Route::get('/universes/create',[UniverseController::class,'create']);
Route::post('/universes',[UniverseController::class,'store']);

use App\Http\Controllers\SuperheroesController;

Route::get('/superheroes',[SuperheroesController::class,'index']);
Route::get('/superheroes/create',[SuperheroesController::class,'create']);
Route::post('/superheroes',[SuperheroesController::class,'store']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/universes', function () {
    $universes = Universe::all();
    return view('universes', compact('universes'));
});

Route::get('/superheroes', function () {
    $superheroes = Superhero::all();
    return view('superheroes', compact('superheroes'));
});

Route::get('/superpowers', function () {
    $superpowers = Superpower::all();
    return view('superpowers', compact('superpowers'));
});

Route::get('/inicio', function () {
    return view('inicio');
});

Route::get('/suma', function () {
    return view('suma');
}); 