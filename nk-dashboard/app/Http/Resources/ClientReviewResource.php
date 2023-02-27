<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientReviewResource extends JsonResource
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
            "client_name" => $this->name,
            "company_logo" => $this->image,
            "company_name" =>$this->company,
            "review_date" =>$this->date,
            "review"=>$this->review
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
