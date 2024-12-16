<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Address;
use App\Models\EmployeeDesignation;

class EmployeeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'employee_designation' => $this->employee_designation_id ? EmployeeDesignation::findOrFail($this->employee_designation_id)->title : "null",
            'address' => $this->address_id ? Address::findOrFail($this->address_id)->postcode : "null",
            'name' => $this->name,
            'date_of_birth' => $this->date_of_birth,
            'phone_number' => $this->phone_number,
            'job_title' => $this->job_title,
            'utr_number' => $this->utr_number,
            'national_insurance_number' => $this->national_insurance_number,
            'remarks' => $this->remarks,
            'is_active' => (bool) $this->is_active
        ];
    }
}
