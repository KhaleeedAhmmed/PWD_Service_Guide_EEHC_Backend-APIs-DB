<?php

namespace App\Http\Resources\Shop;

use App\Http\Resources\Country\CityResource;
use Illuminate\Http\Resources\Json\JsonResource;

class ShopBasicInfoResource extends JsonResource
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
            'name' => $this->name,
            'rate' => $this->rate,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'city' => new CityResource($this->city),
            'favourite' => auth('sanctum')->user() != null ? ($this->favourite ? ($this->favourite->user_id == auth('sanctum')->user()->id ? true : false) : false ) : false,
        ];
    }
}
