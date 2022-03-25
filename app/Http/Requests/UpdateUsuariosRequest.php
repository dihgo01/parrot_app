<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUsuariosRequest extends FormRequest
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
            'nome' => 'required|string|max:255',
            'email' =>  'required|unique:usuarios,email',
            'password' => 'required',
            //'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:1024'],
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo nome é obrigatório.',
            'email.required' =>  'O campo e-mail é obrigatório.',
            'email.unique' =>  'E-mail já esta cadastrado.',
            'password.required' => 'O campo senha é obrigatório.',
        ];
    }
}
