<?php

namespace App\Http\Resources\Category;

use App\Traits\FileManagement;
use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
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
            'icon' => $this->loadFile('Categories/' . ($this->icon != null ?  $this->icon : 'filler.svg')),
            'name' => $this->name,
        ];
    }
}
