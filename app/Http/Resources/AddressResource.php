<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AddressResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=> $this->id,
            "house_number"=> $this->house_number,
            "building_name"=> $this->building_name,
            "street"=> $this->street,
            "town"=> $this->town,
            "city"=> $this->city,
            "postcode"=> $this->postcode,
            "description"=> $this->description,
            "notes"=> $this->notes,
        ];
    }
}
