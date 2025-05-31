<?php

namespace App\Http\Requests\Admin\Masters;

use Illuminate\Foundation\Http\FormRequest;

class StoreDriverRequest extends FormRequest
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
            'f_name'                        => 'required|string|max:255',
            'l_name'                        => 'required|string|max:255',
            'mobile_no'                     => 'required|string|max:20|regex:/^[0-9]{10,15}$/',
            'joining_date'                      => 'required',
            'basic_salary'                      => 'required',
           'alternate_contact_no'      => 'nullable|string|max:20|regex:/^[0-9]{10,15}$/',
           'email'                     => 'nullable|email|max:255',
           'address'            => 'required|string',
           'city'                      => 'required|string|max:100',
           'pincode'                   => 'required|string|max:10|regex:/^[0-9]{6}$/',
           'state'                     => 'required|string|max:100',         
            'aadhar_card_path'                      => 'required',
            'pan_card_path'                      => 'required',
            'driving_license_path'                      => 'required',
            'driving_license_validity'                      => 'required',
            'remark'                      => 'nullable|string|max:255',
            'bank_name'                      => 'required|string|max:255',
            'bank_branch'                      => 'required|string|max:255',
            'bank_account_no'                      => 'required|string|max:255',
            'bank_ifsc_code'                      => 'required|string|max:255',
            'reference_name'                      => 'required|string|max:255',
            'gpay_number'                      => 'required|string|max:255',
            

        ];
    }
}
