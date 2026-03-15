<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use Illuminate\Http\Request;

class SuperheroesController extends Controller
{

public function index()
{
    $heroes = Superhero::all();
    return view('superheroes.index', compact('heroes'));
}

public function create()
{
    return view('superheroes.create');
}

public function store(Request $request)
{

Superhero::create([
'name'=>$request->name,
'real_name'=>$request->real_name,
'gender'=>$request->gender,
'id_universe'=>$request->id_universe
]);

return redirect('/superheroes');

}

}