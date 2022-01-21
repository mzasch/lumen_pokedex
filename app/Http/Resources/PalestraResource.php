<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PalestraResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'citta' => $this->citta,
            'medaglia' => $this->medaglia,
            'capopalestra' => AllenatoreResource::make($this->gymleader),
        ];
    }
}