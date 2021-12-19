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
            'phone' => $this->phone,
            'email' => $this->email,
            'branch' => $this->branch,
            'image' => Storage::disk('public')->url($this->image != null ?  '/employe/' . $this->image : '/Users/avatar.png'),
            'qrCode' => Storage::disk('public')->url($this->qr_code != null ? '/employe/' . $this->image : '/Users/avatar.png'),
            'access_token' => $this->access_token,
        ];
    }
}
