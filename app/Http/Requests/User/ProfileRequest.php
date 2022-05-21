<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function attributes()
    {
        return [
            'city_id'      => 'Cidade',
            'name'         => 'Cidade',
            'email'        => 'E-mail',
            'phone'        => 'Contato',
            'birthday'     => 'Data de nascimento',
            'address'      => 'Endereço',
            'number'       => 'Número',
            'neighborhood' => 'Bairro',
            'complement'   => 'Complemento',
            'zipcode'      => 'CEP',
            'gender'       => 'Gênero',
            'course'       => 'Curso',
            'university'   => 'Universidade',
            'profession'   => 'Profissão',
            'company'      => 'Empresa',
            'about'        => 'Sobre',
            'photo'        => 'Foto',
            'photoObj'     => 'Foto Arquivo'
        ];
    }

    public function rules()
    {
        return [
            'city_id'      => ['required', 'numeric'],
            'name'         => ['required', 'min:2', 'max:100'],
            'email'        => ['required', 'max:100', 'email'],
            'phone'        => ['nullable', 'min:12', 'max:14'],
            'birthday'     => ['nullable', 'min:10', 'max:10', 'date_format:d/m/Y'],
            'address'      => ['nullable', 'max:100'],
            'number'       => ['nullable', 'max:5'],
            'neighborhood' => ['nullable', 'max:50'],
            'complement'   => ['nullable', 'max:50'],
            'zipcode'      => ['nullable', 'min:9', 'max:9'],
            'gender'       => ['nullable', 'numeric'],
            'course'       => ['nullable', 'max:30'],
            'university'   => ['nullable', 'max:30'],
            'profession'   => ['nullable', 'max:30'],
            'company'      => ['nullable', 'max:30'],
            'about'        => ['nullable'],
            'photo'        => ['nullable'],
            'photoObj'     => ['nullable'],
        ];
    }
}
