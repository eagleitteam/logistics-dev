<?php

namespace App\Http\Requests\Admin\Masters;

use Illuminate\Foundation\Http\FormRequest;

class StoreAttendancemanagementRequest extends FormRequest
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
        'month' => 'required|numeric',
        'employee_type' => 'required|in:1,2',
        'employee_ids' => 'required|array',
        'employee_ids.*' => 'required', // You can use `drivers` table if type 2
        'attendance_type' => 'required|array',
        'attendance_type.*' => 'required|in:Present,Absent,Leave',
        'attendance_days' => 'required|array',
        'attendance_days.*' => 'required|numeric|min:0|max:31',
        'remarks' => 'nullable|array',
        'remarks.*' => 'nullable|string|max:255',
        ];
    }
}

