<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = "tipi";

    public function mosse()
    {
        return $this->hasMany(Mossa::class);
    }

    public function pokemon()
    {
        return $this->belongsToMany(Pokemon::class);
    }
}
