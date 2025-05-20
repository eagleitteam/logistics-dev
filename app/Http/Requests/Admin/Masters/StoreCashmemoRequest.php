<?php

namespace App\Http\Requests\Admin\Masters;

use Illuminate\Foundation\Http\FormRequest;

class StoreCashmemoRequest extends FormRequest
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
             'memo_no'                  => 'required|string|max:255',
             'memo_date'                => 'required|date',
             'client_name'              => 'required|string|max:255',
             'vehicle_no'               => 'required|string|max:255',
             'vehicle_type'             => 'required|string|max:255',
             'challan_no'               => 'required|string|max:255',
             'origin'                   => 'required|string|max:255',
             'destination'              => 'required|string|max:255',
             'rate'                     => 'required|numeric',
             'toll_charges'             => 'required|numeric',
             'unloading_charges'        => 'required|numeric',
             'handling_charges'         => 'required|numeric',
             'other_expenses'           => 'required|numeric',
             'balance_amount'           => 'required|numeric',
             'payment_status'           => 'required|string|max:255',
             'advance_amount'           => 'required|numeric',
             'advance_date'             => 'required|date',
             'note'                     => 'nullable|string|max:255',
        ];
    }
}
