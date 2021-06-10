<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;

class UpdateOrganRequest extends FormRequest
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
            'password' => 'sometimes|nullable'
        ];
    }

    public function messages()
    {
        return [
            'name.required' =>  'El nombre es requerido',
            'email.required' => 'El email es requerido'
        ];
    }

    public function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new \Illuminate\Http\Exceptions\HttpResponseException(response()->json(
        [
            'errors' => $errors
        ], \Illuminate\Http\JsonResponse::HTTP_UNPROCESSABLE_ENTITY));
    }
}
