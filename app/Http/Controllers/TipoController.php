<?php

namespace App\Http\Controllers;

use App\Models\Tipo;
use App\Http\Resources\TipoResource;

class TipoController extends Controller
{
    public function index()
    {
        return TipoResource::collection(Tipo::with(['mosse', 'pokemon'])->get());
    }

    public function show($id)
    {
        return new TipoResource(Tipo::with(['mosse', 'pokemon'])->find($id));
    }
}
