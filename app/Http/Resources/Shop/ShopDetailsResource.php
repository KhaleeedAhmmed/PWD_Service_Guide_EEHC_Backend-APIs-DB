<?php

namespace App\Http\Resources\Shop;

use App\Http\Resources\Branche\BrancheResource;
use App\Http\Resources\Country\CityResource;
use App\Http\Resources\Shop\ShopImagesResource;
use App\Http\Resources\Shop\SocialResource;
use App\Traits\FileManagement;
use Illuminate\Http\Resources\Json\JsonResource;

class ShopDetailsResource extends JsonResource
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
            'description' => $this->description,
            'views' => $this->count,
            'share_link' => (url('/')), //static for now
            'images' =>  ShopImagesResource::collection($this->shopImages),
            'logo_image' => $this->loadFile('Shops/' . ($this->logo_image != null ?  $this->logo_image : 'filler.svg')),
            'rate' => $this->rate,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
            'branches' => BrancheResource::collection($this->branches),
            'contact' => new ShopContactResource($this->contact),
            'social' => SocialResource::collection($this->socials),
            'working_hours' => new ShopWorkingHoursResource($this->workingHours),
            'city' => new CityResource($this->city),
            'favourite' => auth('sanctum')->user() != null ? ($this->favourite ? ($this->favourite->user_id == auth('sanctum')->user()->id ? true : false) : false ) : false,
            'place' => $this->place(),
        ];
    }

    public function place(){
        $cats= $this->categoryServices;
        $salon = false;
        $home = false;
        foreach ($cats as $cat) {
                if ($cat->place == 1) {
                    $salon = true;
                } else {
                    $home  = true;
                }

        }
    if(($salon == true) && ($home == true)) {
        return 3;
    }
    else if (($salon == true) && ($home == false)) {
       return 1;
   }
    else if (($salon == false) && ($home == true)) {
       return 2;
   }

  }
}
