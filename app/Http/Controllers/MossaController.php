<?php

namespace App\Http\Controllers;

use App\Models\Mossa;
use App\Http\Resources\MossaResource;

class MossaController extends Controller
{
    public function index()
    {
        return MossaResource::collection(Mossa::with(['tipo', 'pokemon'])->get());
    }

    public function show($id)
    {
        return new MossaResource(Mossa::find($id));
    }
}
