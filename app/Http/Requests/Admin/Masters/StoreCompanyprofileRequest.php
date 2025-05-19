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
            'companyname' => 'required|string|max:255',
            'companyaddress' => 'required|string|max:255',
            'companyphone' => 'required|string|max:255',
            'companyemail' => 'required|string|max:255',
            'companywebsite' => 'required|string|max:255',
            'companylogo' => 'required|string|max:255',
            'gststatus' => 'required|string|max:255',
            'gstnumber' => 'required|string|max:255',
            'pannumber' => 'required|string|max:255',
            'regadd' => 'required|string|max:255',
            'pincode' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
        ];
    }
}
