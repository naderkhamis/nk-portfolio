<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SocialAccountResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "account_name" => $this->name,
            "account_link" => $this->link
        ];
    }

    public function with($request)
    {
        return [
            'versoin' => '1.0.0',
            'author' => 'Nader Khamis'
        ];
    }
}
