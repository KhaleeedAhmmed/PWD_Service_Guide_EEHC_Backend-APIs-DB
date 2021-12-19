<?php

namespace App\Http\Resources\Offer;

use App\Http\Resources\Country\CityResource;
use App\Traits\FileManagement;
use Illuminate\Http\Resources\Json\JsonResource;

class OfferHomeResource extends JsonResource
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
            'id' => $this->shop->id,
            'name' => $this->shop->name,
            'rate' => $this->shop->rate,
            'latitude' => $this->shop->latitude,
            'longitude' => $this->shop->longitude,
            'banner_image' => $this->loadFile('Shops/' . ($this->shop->banner_image != null ?  $this->shop->banner_image : 'filler.svg')),
            'logo_image' => $this->loadFile('Shops/' . ($this->shop->logo_image != null ?  $this->shop->logo_image : 'filler.svg')),
            'city' => new CityResource($this->shop->city),
            'offer' => new OfferBasicInfoResource($this),
            'favourite' => auth('sanctum')->user() != null ? ($this->shop->favourite ? ($this->shop->favourite->user_id == auth('sanctum')->user()->id ? true : false) : false ) : false,
        ];
    }
}
