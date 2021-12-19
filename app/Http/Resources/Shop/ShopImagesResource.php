<?php

namespace App\Http\Resources\Shop;

use App\Traits\FileManagement;
use Illuminate\Http\Resources\Json\JsonResource;

class ShopImagesResource extends JsonResource
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
            'image' =>  $this->loadFile('Shops/' . ($this->img != null ?  $this->img : 'filler.svg')),
        ];
    }
}
