<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Palestra extends Model
{
    protected $table = "palestre";

    public function gymleader()
    {
        return $this->belongsTo(Allenatore::class, 'capopalestra');
    }
}
