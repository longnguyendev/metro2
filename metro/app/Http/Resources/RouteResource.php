<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RouteResource extends JsonResource
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
            'route_id' => $this->route_id,
            'name' => $this->name,
            'opt_time' => $this->opt_time,
            'length' => $this->length,
            'min_cost' => $this->min_cost,
            'cost' => $this->cost,
            'stations' => $this->getStations()->get()
        ];
    }
}
