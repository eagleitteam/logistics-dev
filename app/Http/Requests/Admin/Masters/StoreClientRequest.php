<?php

namespace App\Http\Requests\Admin\Masters;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreClientRequest extends FormRequest
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
            'name' => 'required',
            'gst_no'                    =>  [
                'nullable',
                'string',
                'max:15',
                'regex:/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/',
                Rule::unique('clients', 'gst_no')->whereNull('deleted_at')
            ],
            'contact_person'              => 'required|string|max:255',
            'contact_number' => 'required|string|max:20|regex:/^[0-9]{10,15}$/',
            'alternate_contact_no' => 'nullable|string|max:20|regex:/^[0-9]{10,15}$/',
            'email' => 'nullable|email|max:255',
            'billing_address' => 'required|string|max:100',
            'city'                      => 'required|string|max:100',
            'pincode'                   => 'required|string|max:10|regex:/^[0-9]{6}$/',
            'state'                     => 'required|string|max:100',
            'billing_type' => 'required',

        ];
    }
}
