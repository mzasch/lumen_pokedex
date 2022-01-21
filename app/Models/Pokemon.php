<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = "pokemon";

    public function tipi()
    {
        return $this->belongsToMany(Tipo::class);
    }

    public function mosse_conosciute()
    {
        return $this->belongsToMany(Mossa::class);
    }

    public function allenato_da()
    {
        return $this->belongsToMany(Allenatore::class);
    }
}
