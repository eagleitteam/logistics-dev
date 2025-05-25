<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSelfVehicleRequest extends FormRequest
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
            'vehicle_number'                        => 'required',
            'vehicle_id'                        => 'nullable',
            'fule_type'                        => 'required',
            'register_date'                        => 'required',
            'chassis_num'                        => 'required',
            'eng_num'                        => 'required',
            'model_num'                        => 'required',
            'toll_stm'                        => 'nullable',
            'remark'                        => 'nullable',
            'f_s_d'                        => 'nullable',
            'f_e_d'                        => 'nullable',
            'file'                        => 'nullable',
            'tax_start_date'                        => 'nullable',
            'tax_end_date'                        => 'nullable',
            'tax_file'                        => 'nullable',
            'insurance_start_date'                        => 'nullable',
            'insurance_end_date'                        => 'nullable',
            'insurance_company_name'                        => 'nullable',
            'insurance_document'                        => 'nullable',
            'puc_start_date'                        => 'nullable',
            'puc_end_date'                        => 'nullable',
            'puc_file'                        => 'nullable',
            'permit_start_date'                        => 'nullable',
            'permit_end_date'                        => 'nullable',
            'permit_document'                        => 'nullable',
            'national_permit_start_date'                        => 'nullable',
            'national_permit_end_date'                        => 'nullable',
            'national_permit_file'                        => 'nullable',
            'loan_start_date'                        => 'nullable',
            'loan_end_date'                        => 'nullable',
            'bank_name'                        => 'nullable',
            'loan_amt'                        => 'nullable',
            'emi_count'                        => 'nullable',
            'emi_amt'                        => 'nullable',
            'emi_date'                        => 'nullable',
            'loan_document'                        => 'nullable',
        ];
    }
}
