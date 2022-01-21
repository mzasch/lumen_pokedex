<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TipoResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'descrizione' => $this->descrizione,
            'pokemon' => PokemonResource::collection($this->whenLoaded('pokemon')),
            'mosse' => MossaResource::collection($this->whenLoaded('mosse')),
        ];
    }
}