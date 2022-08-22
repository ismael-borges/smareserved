<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePaymentFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nickname' => 'required|string|max:255',
            'digit' => 'required|string|max:16|min:16',
            'mounth' => 'required|string|max:2|min:2',
            'yearcard' => 'required|string|max:2|min:2',
            'nameprinted' => 'required|string|max:255',
            'cvv' => 'required|string|max:3|min:3',
        ];
    }

    public function messages()
    {
        return [
            'nickname.max' => 'O campo apelido não deve ter mais de 255 caracteres.',
            'nickname.required' => 'O campo apelido é obirgatório.',
            'digit.min' => 'O campo número deve ter pelo menos 16 caracteres.',
            'digit.max' => 'O campo número não deve ter mais de 16 caracteres.',
            'digit.required' => 'O campo número é obrigatório.',
            'mounth.min' => 'O campo mês deve ter pelo menos 2 caracteres.',
            'mounth.max' => 'O campo mês não deve ter mais de 2 caracteres.',
            'mounth.required' => 'O campo mês é obrigatório.',
            'yearcard.min' => 'O campo ano deve ter pelo menos 2 caracteres.',
            'yearcard.max' => 'O campo ano não deve ter mais de 2 caracteres.',
            'yearcard.required' => 'O campo ano é obrigatório.',
            'cvv.min' => 'O campo cvv deve ter pelo menos 3 caracteres.',
            'cvv.max' => 'O campo cvv não deve ter mais de 3 caracteres.',
            'cvv.required' => 'O campo cvv é obrigatório.',
            'nameprinted.max' => 'O campo nome impresso não deve ter mais de 255 caracteres.',
            'nameprinted.required' => 'O campo nome impresso é obrigatório.',
        ];
    }
}
