<?php

namespace App\Http\Resources\Provider;

use App\Traits\FileManagement;
use Illuminate\Http\Resources\Json\JsonResource;

class ProviderResource extends JsonResource
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
            'logo' => $this->loadFile('Categories/' . ($this->icon != null ?  $this->icon : 'filler.svg')),
            'name' => $this->name,
        ];
    }
}
