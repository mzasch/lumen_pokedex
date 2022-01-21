<?php

namespace App\Http\Controllers;

use App\Models\Palestra;
use App\Http\Resources\PalestraResource;

class PalestraController extends Controller
{
    public function index()
    {
        return PalestraResource::collection(Palestra::with('gymleader')->get());
    }

    public function show($id)
    {
        return new PalestraResource(Palestra::find($id));
    }
}
