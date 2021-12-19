<?php

namespace App\Http\Resources\Shop;

use App\Http\Resources\Category\CategoryNoIconResource;
use App\Http\Resources\Country\CityResource;
use App\Http\Resources\Offer\OfferBasicInfoResource;
use App\Traits\FileManagement;
use Illuminate\Http\Resources\Json\JsonResource;

class FavouritesLikeShopResource extends JsonResource
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
            'offer' => $this->shop->offers->isNotEmpty() ? new OfferBasicInfoResource($this->shop->offers->first()) : null,
            'favourite' => true,
        ];
    }
}
