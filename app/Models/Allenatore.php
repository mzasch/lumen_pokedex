<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Allenatore extends Model
{
    protected $table = "allenatori";

    public function palestra()
    {
        return $this->hasOne(Palestra::class, 'capopalestra');
    }

    public function squadra()
    {
        return $this->belongsToMany(Pokemon::class);
    }
}
