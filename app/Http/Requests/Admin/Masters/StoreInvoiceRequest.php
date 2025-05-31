<?php

namespace App\Http\Requests\Admin\Masters;

use Illuminate\Foundation\Http\FormRequest;

class StoreInvoiceRequest extends FormRequest
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
            'client_id' => 'nullable|exists:clients,id',
            'invoice_date' => 'nullable|date',
            'invoice_no' => 'nullable|string|max:255',
            'invoice_amount' => 'nullable|numeric|min:0',
            'tds' => 'nullable|numeric|min:0',
            'payment_received_amount' => 'nullable|numeric|min:0',
            'payment_received_date' => 'nullable|date',
            'payment_mode' => 'nullable|in:1,2',
            'remark' => 'nullable|string|max:255',
            'invoice_items' => 'required|array',
            
        ];
    }
}
