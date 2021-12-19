<?php

namespace App\Http\Resources\Shop;

use App\Http\Resources\Country\CityResource;
use App\Http\Resources\Offer\OfferBasicInfoResource;
use App\Traits\FileManagement;
use Illuminate\Http\Resources\Json\JsonResource;

class ShopHomeResource extends JsonResource
{
    use FileManagement;
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
            'banner_image' => $this->loadFile('Shops/' . ($this->banner_image != null ?  $this->banner_image : 'filler.svg')),
            'logo_image' => $this->loadFile('Shops/' . ($this->logo_image != null ?  $this->logo_image : 'filler.svg')),
            'city' => new CityResource($this->city),
            'offer' => $this->offers->isNotEmpty() ? new OfferBasicInfoResource($this->offers->first()) : null,
            'favourite' => auth('sanctum')->user() != null ? ($this->favourite ? ($this->favourite->user_id == auth('sanctum')->user()->id ? true : false) : false ) : false,
        ];
    }
}
