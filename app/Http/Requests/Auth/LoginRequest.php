<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function attributes()
    {
        return [
            'email'    => 'E-mail',
            'password' => 'Senha',
        ];
    }

    public function rules()
    {
        return [
            'email'    => ['required', 'max:255', 'email'],
            'password' => ['required', 'min:8', 'max:255'],
        ];
    }
}
