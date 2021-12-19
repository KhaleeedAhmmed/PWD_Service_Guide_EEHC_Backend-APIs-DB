<?php

namespace App\Http\Resources\Shop;
use App\Traits\FileManagement;
use Illuminate\Http\Resources\Json\JsonResource;

class SocialResource extends JsonResource
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
            'link' => $this->link,
            'icon' => $this->loadFile('Shops/' . ($this->icon != null ?  $this->icon : 'filler.svg')),
        ];
    }
}
