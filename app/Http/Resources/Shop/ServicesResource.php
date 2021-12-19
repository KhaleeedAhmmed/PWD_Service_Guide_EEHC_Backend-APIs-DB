<?php

namespace App\Http\Resources\Shop;

use App\Http\Resources\Shop\CategoryServicesResource;
use App\Traits\FileManagement;
use Illuminate\Http\Resources\Json\JsonResource;

class ServicesResource extends JsonResource
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
            'image' => $this->loadFile('Services/' . ($this->image != null ?  $this->image : 'filler.svg')),
            'old_price' => $this->old_price,
            'new_price' => $this->new_price,
        ];
    }
}
