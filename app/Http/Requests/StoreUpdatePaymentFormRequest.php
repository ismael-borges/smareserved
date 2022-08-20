<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePaymentFormRequest extends FormRequest
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
            'nickname' => 'required|string|max:255',
            'digit' => 'required|string|max:16',
            'mounth' => 'required|string|max:2|min:2',
            'yearcard' => 'required|string|max:2|min:2',
            'nameprinted' => 'required|string|max:255',
            'cvv' => 'required|string|max:3|min:3',
        ];
    }
}
