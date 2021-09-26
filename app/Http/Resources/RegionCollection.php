<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;


class RegionCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $arrayData = [
            'iso' => $this->iso,
            'name' => $this->name,
            'capital' => $this->capital,
            'region' => "မြန်မာနိုင်ငံ " . $this->region,
            'area' => $this->area,
            'area_unit' => 'km²',
            'type' => $this->type,
            'url' => route('regions.view', $this->id)
        ];

        return $arrayData;
    }
}
