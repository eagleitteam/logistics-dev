<?php

namespace App\Http\Requests\Admin\Masters;

use Illuminate\Foundation\Http\FormRequest;

class StoreTripRequest extends FormRequest
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
            'trip_date'                        => 'required',
            'vehicle_id'                        => 'required',
            'origin'                        => 'required',
            'destination'                        => 'required',
            'rate'                        => 'required',
            'client_id'                        => 'required',
            'driver_id'                        => 'required',
            'per_day_allow'                        => 'required',
            
        ];
    }
}
