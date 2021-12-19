<?php

namespace App\Http\Resources\Shop;

use Illuminate\Http\Resources\Json\JsonResource;

class ShopContactResource extends JsonResource
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
            'address' => $this->address,
            'email' => $this->email,
            'mobile1' => $this->mobile1,
            'mobile2' => $this->mobile2,
            'land_line' => $this->land_line,
        ];
    }
}
