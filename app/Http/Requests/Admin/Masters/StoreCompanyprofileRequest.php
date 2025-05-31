<?php

namespace App\Http\Requests\Admin\Masters;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyprofileRequest extends FormRequest
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
            'company_name' => 'required|string|max:255',
            'company_address' => 'nullable|string|max:255',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'website' => 'required|string|max:255',
            'gststatus' => 'required|string|max:255',
            'gstin' => 'required|string|max:255',
            'pan_number' => 'required|string|max:255',
            'address_line1' => 'required|string|max:255',
            'address_line2' => 'nullable|string|max:255',
            'pin_code' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'company_logo' => 'nullable|image|mimes:png|max:2048',
            'company_seal' => 'nullable|image|mimes:png|max:2048',
            'company_signature' => 'nullable|image|mimes:png|max:2048',
        ];
    }

}
