<?php

namespace App\Http\Requests\Admin\Masters;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreVendorRequest extends FormRequest
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
            'name'                      => 'required|string|max:255',
            'vendor_address'            => 'required|string',
            'gst_no'                    =>  [
                                                'nullable',
                                                'string',
                                                'max:15',
                                                'regex:/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/',
                                                Rule::unique('vendors', 'gst_no')->whereNull('deleted_at')
                                            ],
            'tds_applicable'            => 'required',
            'tds_rate'                  => 'nullable|numeric|between:0,100|required_if:tds_applicable,true',
            'contact_name'              => 'required|string|max:255',
            'contact_no'                => 'required|string|max:20|regex:/^[0-9]{10,15}$/',
            'alternate_contact_no'      => 'nullable|string|max:20|regex:/^[0-9]{10,15}$/',
            'email'                     => 'nullable|email|max:255',
            'city'                      => 'required|string|max:100',
            'pincode'                   => 'required|string|max:10|regex:/^[0-9]{6}$/',
            'state'                     => 'required|string|max:100',         
        ];
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'gst_no.regex' => 'The GST number format is invalid. It should be in the format 22AAAAA0000A1Z5.',
            'contact_no.regex' => 'The contact number must be 10 to 15 digits.',
            'alt_contact_no.regex' => 'The alternate contact number must be 10 to 15 digits.',
            'pin_code.regex' => 'The PIN code must be 6 digits.',
            'tds_rate.required_if' => 'The TDS rate field is required when TDS is applicable.',
            'vehicles.*.vehicle_no.required_with' => 'Vehicle number is required when adding vehicles.',
            'vehicles.*.vehicle_type.required_with' => 'Vehicle type is required when adding vehicles.',
        ];
    }

    /**
     * Prepare the data for validation.
     */
    protected function prepareForValidation()
    {
        // Convert TDS applicable to boolean
        $this->merge([
            'tds_applicable' => $this->tds_applicable === 'Yes',
        ]);
    }
}
