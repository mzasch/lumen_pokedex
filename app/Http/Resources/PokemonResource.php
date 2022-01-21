<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PokemonResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'nome' => $this->nome,
            'sesso' => $this->sesso,
            'livello' => $this->livello,
            'tipi' => TipoResource::collection($this->whenLoaded('tipi')),
            'mosse_conosciute' => MossaResource::collection($this->whenLoaded('mosse_conosciute')),
        ];
    }
}