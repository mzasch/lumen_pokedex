<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AllenatoreResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'nome' => $this->nome,
            'citta_origine' => $this->citta_origine,
            'eta' => $this->eta,
            'sesso' => $this->sesso,
            'palestra' => PalestraResource::make($this->whenLoaded('palestra')),
        ];
    }
}