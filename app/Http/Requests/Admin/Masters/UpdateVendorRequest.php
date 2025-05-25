<?php

namespace App\Http\Requests\Admin\Masters;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVendorRequest extends FormRequest
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
            'name'                      => 'required|string|max:55',
            'vendor_address'            => 'required|string',
            'gst_no'                    =>  [
                                                'required',
                                                'nullable',
                                                'string',
                                                'max:15',
                                                'regex:/^[0-9]{2}[A-Z]{5}[0-9]{4}[A-Z]{1}[1-9A-Z]{1}Z[0-9A-Z]{1}$/',
                                                Rule::unique('vendors', 'gst_no')->whereNull('deleted_at')
                                            ],
            'tds_applicable'            => 'required',
            'tds_rate'                  => 'nullable|numeric|between:0,2|required_if:tds_applicable,true',
            'contact_name'              => 'required|string|max:55',
            'contact_no'                => 'required|string|max:10|regex:/^[0-9]{10,15}$/',
            'alternate_contact_no'      => 'nullable|string|max:10|regex:/^[0-9]{10,15}$/',
            'email'                     => 'nullable|email|max:55',
            'city'                      => 'required|string|max:100',
            'pincode'                   => 'required|string|max:6|regex:/^[0-9]{6}$/',
            'state'                     => 'required|string|max:100',         
        ];
    }
}
