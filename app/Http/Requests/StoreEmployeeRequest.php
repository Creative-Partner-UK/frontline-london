<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'employee_designation_id' => 'exists:employee_designations,id',
            'address_id' => 'exists:addresses,id',
            'name' => 'required|string|max:255',
            'date_of_birth' => 'required|date|before:-18 years',
            'phone_number' => 'required|string|max:255',
            'job_title' => 'required|in:head doorman,supervisor,team member',
            'utr_number' => 'string|max:255',
            'national_insurance_number' => 'string|max:255',
            'remarks' => 'min:3|max:1000',
            'is_active' => 'boolean',
        ];
    }
}
