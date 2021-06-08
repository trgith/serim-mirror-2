<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrganRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'action_user' => 'required',
            'menuroles' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'email.required' => 'El email es requerido',
            'password.required' => 'La contraseña requerida',
            'action_user.required' => 'La acción del usuario es requerida',
            'menuroles.required' => 'El rol es requerido'
        ];
    }
}
