<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAddressFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nickname' => 'required|string|max:255',
            'cep' => 'required|string|max:9|min:9',
            'digit' => 'required|string|max:255',
            'complement' => 'required|string|max:255',
            'superscription' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'reference' => 'required|string|max:255',
        ];
    }

    public function messages()
    {
        return [
            'nickname.max' => 'O campo apelido não deve ter mais de 255 caracteres.',
            'nickname.required' => 'O campo apelido é obirgatório.',
            'cep.min' => 'O campo cep deve ter pelo menos 9 caracteres.',
            'cep.max' => 'O campo cep não deve ter mais 9 caracteres.',
            'cep.required' => 'O campo cep é obrigatório.',
            'digit.max' => 'O campo número não deve ter mais de 255 caracteres.',
            'digit.required' => 'O campo número é obrigatório.',
            'complement.max' => 'O campo complemento não deve ter mais de 255 caracteres.',
            'complement.required' => 'O campo complemento é obrigatório.',
            'superscription.max' => 'O campo endereço não deve ter mais de 255 caracteres.',
            'superscription.required' => 'O campo endereço é obrigatório.',
            'district.max' => 'O campo bairro não deve ter mais de 255 caracteres.',
            'district.required' => 'O campo bairro é obrigatório.',
            'city.max' => 'O campo cidade não deve ter mais de 255 caracteres.',
            'city.required' => 'O campo cidade é obrigatório.',
            'state.max' => 'O campo estado não deve ter mais de 255 caracteres.',
            'state.required' => 'O campo estado é obrigatório.',
            'reference.max' => 'O campo referrência não deve ter mais de 255 caracteres.',
            'reference.required' => 'O campo referrência é obrigatório.',
        ];
    }
}
