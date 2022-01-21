<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;
use App\Http\Resources\PokemonResource;

class PokemonController extends Controller
{
    public function index()
    {
        return PokemonResource::collection(Pokemon::with(['tipi', 'mosse_conosciute'])->get());
    }

    public function show($id)
    {
        return new PokemonResource(Pokemon::with(['tipi', 'mosse_conosciute'])->find($id));
    }
}
