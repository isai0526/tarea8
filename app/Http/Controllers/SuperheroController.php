<?php

namespace App\Http\Controllers;

use App\Models\Superhero;
use App\Models\Universe;
use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index() {
        $superheroes = Superhero::all();
        return view('superheroes', compact('superheroes'));
    }

    public function create() {
        $universes = Universe::all();
        return view('create_superhero', compact('universes'));
    }

    public function store(Request $request) {
        Superhero::create($request->all());
        return redirect()->route('superheroes.index');
    }

    public function show(Superhero $superhero) {
        return view('show_superhero', compact('superhero'));
    }

    public function edit(Superhero $superhero) {
        $universes = Universe::all();
        return view('edit_superhero', compact('superhero', 'universes'));
    }

    public function update(Request $request, Superhero $superhero) {
        $superhero->update($request->all());
        return redirect()->route('superheroes.index');
    }

    public function destroy(Superhero $superhero) {
        $superhero->delete();
        return redirect()->route('superheroes.index');
    }
}