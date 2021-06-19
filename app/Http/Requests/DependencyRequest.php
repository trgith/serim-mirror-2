<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DependencyRequest extends FormRequest
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
            'name_dependency' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name_dependency.required' => 'El nombre de la dependencia es requerido'
        ];
    }
}
