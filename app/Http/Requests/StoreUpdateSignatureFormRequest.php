<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateSignatureFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'products' => 'required|array|min:1',
            'quantity' => 'required|array|min:1',
            'recurrence_type' => 'required|integer|in:1,2,3',
            'payment_id' => 'required|integer',
            'address_id' => 'required|integer',
        ];
    }
}
