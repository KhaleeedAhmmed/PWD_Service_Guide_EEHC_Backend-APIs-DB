<?php

namespace App\Http\Resources\Branche;

use App\Http\Resources\Country\CityResource;
use Illuminate\Http\Resources\Json\JsonResource;

class BrancheResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'city' => new CityResource($this->city),
        ];
    }
}
