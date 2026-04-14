<?php

namespace App\Http\Controllers;

use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{
    public function index() {
        $universes = Universe::all();
        return view('universes', compact('universes'));
    }

    public function create() {
        return view('create_universe');
    }

    public function store(Request $request) {
        Universe::create($request->all());
        return redirect()->route('universes.index');
    }

    public function show(Universe $universe) {
        return view('show_universe', compact('universe'));
    }

    public function edit(Universe $universe) {
        return view('edit_universe', compact('universe'));
    }

    public function update(Request $request, Universe $universe) {
        $universe->update($request->all());
        return redirect()->route('universes.index');
    }

    public function destroy(Universe $universe) {
        $universe->delete();
        return redirect()->route('universes.index');
    }
}