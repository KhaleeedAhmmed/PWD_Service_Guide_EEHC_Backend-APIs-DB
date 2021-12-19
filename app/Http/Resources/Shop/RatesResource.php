<?php

namespace App\Http\Resources\Shop;

use App\Http\Resources\Shop\CategoryServicesResource;
use App\Traits\FileManagement;
use Illuminate\Http\Resources\Json\JsonResource;

class RatesResource extends JsonResource
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
            'comment' => $this->comment,
            'rate' => $this->rate,
            'img' =>($this->img != null) ? $this->loadFile('rates/' . $this->img ) : "",
            'name' =>$this->user()->first()->name,
        ];
    }
}
