<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;


class RegisterRequest extends FormRequest
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
            'name' => ['required', 'string', 'min:2'],
            'email' => ['required', 'string', 'email', 'unique:users'],
            'password' => ['required', Rules\Password::defaults()],
            'birthday' => ['required', 'date'],
            'profile_img' => ['required'],
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'El nombre es obligatorio.',
            'name.min' => 'El nombre debe tener mas de 1 carácter.',
            'email.required' => 'El email es obligatorio.',
            'email.unique' => 'El email ya existe.',
            'password.required' => 'La contraseña es obligatoria.',
            'birthday.required' => 'La fecha de nacimiento es obligatoria.',
            'profile_img.required' => 'La foto de perfil es obligatoria.',
        ];
    }
}
