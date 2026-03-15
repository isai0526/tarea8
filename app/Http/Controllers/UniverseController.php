<?php

namespace App\Http\Controllers;

use App\Models\Universe;
use Illuminate\Http\Request;

class UniverseController extends Controller
{

public function index()
{
    $universes = Universe::all();
    return view('universes', compact('universes'));
}

public function create()
{
    return view('create_universe');
}

public function store(Request $request)
{
    Universe::create([
        'universe'=>$request->universe,
        'company'=>$request->company,
        'age'=>$request->age
    ]);

    return redirect('/universes');
}

}