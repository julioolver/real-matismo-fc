<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PlayerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return [
        //     'name' => $this->name,
        //     'description' => $this->description,
        //     'id' => $this->id
        // ];
        //return parent::toArray($request);
        return $this->resource->toArray($request);
    }
}
