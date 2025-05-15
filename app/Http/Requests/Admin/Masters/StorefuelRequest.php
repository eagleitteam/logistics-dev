<?php

namespace App\Http\Requests\Admin\Masters;

use Illuminate\Foundation\Http\FormRequest;

class StorefuelRequest extends FormRequest
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
                'date' => 'required',
                'vehical_number' => 'required',
                'current_km' => 'required',
                'fuel_qty' => 'required',
                'fuel_rate' => 'required',
                'driver_name' => 'required',
                'payment_method' => 'required',
                'distance' => 'required',
                'fuel_amt' => 'required',
                'avg' => 'required',
                'note' => 'nullable|string',
        ];
    }
}
