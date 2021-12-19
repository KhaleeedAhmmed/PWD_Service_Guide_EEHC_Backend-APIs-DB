<?php

namespace App\Http\Resources\Notification;

use App\Traits\FileManagement;
use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
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
            'img' => $this->loadFile('Notifications/' . ($this->img != null ?  $this->img : 'filler.svg')),
            'title' => $this->title,
            'description' => $this->description,
            'city' => $this->city,
            'date' => $this->created_at->toDateString(),
        ];
    }
}
