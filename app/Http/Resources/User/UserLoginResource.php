<?php

namespace App\Http\Resources\User;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Storage;

class UserLoginResource extends JsonResource
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
            'name' => $this->name,
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email_verified_at' => $this->email_verified_at != null ? $this->email_verified_at->format('Y-m-d h:i:s') : null,
            'image' => Storage::disk('public')->url($this->image != null ? $this->folder . '/' . $this->image : '/Users/avatar.png'),
            'access_token' => $this->access_token,
        ];
    }
}
