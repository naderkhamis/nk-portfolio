<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CareerResource extends JsonResource
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
            "position" => $this->title,
            "company_name" => $this->company,
            "company_logo" =>$this->image,
            "job_description" =>$this->description,
            "from"=>$this->from_date,
            "to"=>$this->to_date
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
