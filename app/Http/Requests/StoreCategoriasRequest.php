<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoriasRequest extends FormRequest
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
            'nome_categoria' => 'required',
            'data_limite_atendimento' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome_categoria.required' => 'O campo nome da categoria é obrigatório.',
            'data_limite_atendimento.required' =>  'O campo tempo máximo de atendimento é obrigatório.',

        ];
    }
}
