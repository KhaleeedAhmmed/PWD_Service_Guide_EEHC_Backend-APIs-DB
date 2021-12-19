<?php

namespace App\Http\Resources\Offer;

use App\Http\Resources\Country\CityResource;
use App\Http\Resources\Shop\ShopBasicInfoResource;
use App\Traits\FileManagement;
use Illuminate\Http\Resources\Json\JsonResource;

class OfferResource extends JsonResource
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
            'offers' => OfferBasicInfoResource::collection($this->offers),
            'favourite' => auth('sanctum')->user() != null ? ($this->favourite ? ($this->favourite->user_id == auth('sanctum')->user()->id ? true : false) : false ) : false,
        ];
    }
}
