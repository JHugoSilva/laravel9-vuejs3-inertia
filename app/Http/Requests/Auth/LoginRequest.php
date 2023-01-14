<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => ['required', 'email'],
            'password' => ['required', 'string']
        ];
    }

    public function messages() {
        return [
            'email.required' => 'O email e obrigatório',
            'email.email' => 'O campo de email precisa ter um e-mail valido',
            'password.required' => 'O de senha e obrigatório',
            'password.string' => 'O campo de senha deve ser uma string',
        ];
    }
}
