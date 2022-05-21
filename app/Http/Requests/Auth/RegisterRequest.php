<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function attributes()
    {
        return [
            'name'                 => 'Nome',
            'email'                => 'E-mail',
            'password'             => 'Senha',
            'password_confirmation' => 'Confirmação de senha',
        ];
    }

    public function rules()
    {
        return [
            'name'                 => ['required',  'min:2','max:255'],
            'email'                => ['required', 'max:255','email'],
            'password'             => ['required', 'min:8', 'max:255'],
            'password_confirmation' => ['required', 'min:8', 'max:255', 'same:password'],
        ];
    }
}
