<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mossa extends Model
{
    protected $table = "mosse";

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }

    public function pokemon()
    {
        return $this->belongsToMany(Pokemon::class);
    }
}
