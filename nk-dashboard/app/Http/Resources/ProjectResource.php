<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            "project_name" => $this->name,
            "project_category" => $this->category->name,
            "project_image" =>$this->image,
            "project_link" =>$this->url,
            "project_description"=>$this->description
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
