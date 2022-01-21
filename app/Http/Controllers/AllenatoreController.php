<?php

namespace App\Http\Controllers;

use App\Models\Allenatore;
use App\Http\Resources\AllenatoreResource;
use Illuminate\Database\Eloquent\Builder;

class AllenatoreController extends Controller
{
    public function index()
    {
        return AllenatoreResource::collection(Allenatore::with('palestra')->get());
        //return response()->json(Allenatore::all());
    }

    public function show($id)
    {
        return new AllenatoreResource(Allenatore::find($id));
        //return Allenatore::find($id);
    }

    public function test()
    {
        return Allenatore::whereHas('squadra', function(Builder $query) { $query->where('nome', 'Dragonite'); })->get();
    }
}
