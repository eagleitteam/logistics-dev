<?php

namespace App\Http\Requests\Asmin;

use Illuminate\Foundation\Http\FormRequest;

class StoreSalaryRequest extends FormRequest
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
            'selected_employee_type' => 'required|in:1,2',
            'selected_month'         => 'required|integer|min:1|max:12',
            'from_date'              => 'required|date',
            'to_date'                => 'required|date|after_or_equal:from_date',

            'employee_id'     => 'required|array',
            'employee_id.*'   => 'required|integer|distinct',

            'EmployeeName'    => 'required|array',
            'EmployeeName.*'  => 'required|string',

            'basic_salary'    => 'required|array',
            'basic_salary.*'  => 'required|numeric|min:0',

            'trip_allowance'  => 'nullable|array',
            'trip_allowance.*'=> 'nullable|numeric|min:0',

            'net_salary'      => 'required|array',
            'net_salary.*'    => 'required|numeric|min:0',
        ];
    }
}
