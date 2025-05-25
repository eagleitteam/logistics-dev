<?php

namespace App\Http\Requests\Admin\Masters;

use Illuminate\Foundation\Http\FormRequest;

class StoreVendorhasvehicleRequest extends FormRequest
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
                'vendor_id' => 'required|exists:vendors,id',
                'Vehicle_id' => 'required|array|max:20',
                'vehicle_number' => 'required|array|max:20',
                'capacity' => 'required|array|max:20',
                'status' => 'required|array',
                'status.*' => 'in:active,maintenance,inactive',

        ];
    }
}
