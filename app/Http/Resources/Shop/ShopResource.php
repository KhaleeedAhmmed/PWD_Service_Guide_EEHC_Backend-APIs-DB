<?php

namespace App\Http\Resources\Shop;

use App\Http\Resources\Category\CategoryNoIconResource;
use App\Http\Resources\Country\CityResource;
use App\Traits\FileManagement;
use Illuminate\Http\Resources\Json\JsonResource;

class ShopResource extends JsonResource
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
        $categoriesData = array();
        foreach ($this->categories as $record) {
            $categoriesData[] = new CategoryNoIconResource($record->category);
        }
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'banner_image' => $this->loadFile('Shops/' . ($this->banner_image != null ?  $this->banner_image : 'filler.svg')),
            'logo_image' => $this->loadFile('Shops/' . ($this->logo_image != null ?  $this->logo_image : 'filler.svg')),
            'rate' => $this->rate,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'categories' => $categoriesData,
            'city' => new CityResource($this->city),
            'favourite' => auth('sanctum')->user() != null ? ($this->favourite ? ($this->favourite->user_id == auth('sanctum')->user()->id ? true : false) : false ) : false,
        ];
    }
}
