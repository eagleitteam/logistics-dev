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
                'Vehicle_id' => 'required|string|max:20',
                'vehicle_number' => 'required|string|max:20',
                'capacity' => 'numeric',
                'status' => 'required|in:active,maintenance,inactive',
        ];
    }
}
