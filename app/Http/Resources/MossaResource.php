<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MossaResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'nome' => $this->nome,
            'tipo' => TipoResource::make($this->tipo),
        ];
    }
}