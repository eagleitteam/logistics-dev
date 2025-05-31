<?php

namespace App\Http\Requests\Admin\Masters;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeemanagementRequest extends FormRequest
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
             'type' => 'nullable|string|max:50',
            'emp_id' => 'required|string|max:100',
            'first_name' => 'required|string|max:100',
            'last_name' => 'nullable|string|max:100',
            'joining_date' => 'nullable|date',
            'basic_salary' => 'nullable|numeric|min:0',
            'contact_number' => 'nullable|string|max:15',
            'email' => 'nullable|email|max:100',
            'department' => 'nullable|string|max:100',
            'designation' => 'nullable|string|max:100',
            'address' => 'nullable|string|max:255',
            'bank_name' => 'nullable|string|max:100',
            'account_number' => 'nullable|string|max:50',
            'ifsc_code' => 'nullable|string|max:20',
            'pan_number' => 'nullable|string|max:20',
            'branch' => 'nullable|string|max:100',
            'note' => 'nullable|string|max:500',
            'status' => 'nullable|numeric|min:0|max:4',
        ];
    }
}
