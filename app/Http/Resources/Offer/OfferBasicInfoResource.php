<?php

namespace App\Http\Resources\Offer;

use App\Traits\FileManagement;
use Illuminate\Http\Resources\Json\JsonResource;

class OfferBasicInfoResource extends JsonResource
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
        // $season = trans('api/offer.summer');
        // switch ($this->season) {
        //     case 2:
        //         $season = trans('api/offer.autumn');
        //         break;
        //     case 3:
        //         $season = trans('api/offer.winter');
        //         break;
        //     case 4:
        //         $season = trans('api/offer.spring');
        //         break;
        //     default:
        //         break;
        // }
        return [
            'id' => $this->id,
            'banner_image' => $this->loadFile('Offers/' . ($this->banner_image != null ?  $this->banner_image : 'filler.svg')),
            'logo_image' => $this->loadFile('Offers/' . ($this->logo_image != null ?  $this->logo_image : 'filler.svg')),
            'name' => $this->season,
        ];
    }
}
