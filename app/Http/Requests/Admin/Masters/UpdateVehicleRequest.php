<?php

namespace App\Http\Requests\admin\masters;

use Illuminate\Foundation\Http\FormRequest;

class UpdateVehicleRequest extends FormRequest
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
            'vehicle_number' => 'required',
            'vehicle_type' => 'required',
            'fule_type' => 'required',
            'register_date' => 'required',
            'chassis_num' => 'required',
            'eng_num' => 'required',
            'model_num' => 'required',
            'toll_stm' => 'required',
            'remark'=>'required',
            'f_s_d' =>'required',
            'f_e_d'=>'required',
            'file'=>'required'
            
        ];
    }
}
