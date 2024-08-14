<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

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
            'employee_designation_id' => $this->employee_designation_id,
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
