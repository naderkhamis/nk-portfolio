<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContactInformationResource extends JsonResource
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
            "address" => $this->address,
            "email" => $this->email,
            "phone" =>$this->phone
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
