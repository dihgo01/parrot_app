<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePrioridadesRequest extends FormRequest
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
            'nome_prioridade' => 'required|unique:tickets_prioridades,nome_prioridade',
            'ordenacao' => 'required',
            'data_limite_atendimento' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nome_prioridade.required' => 'O campo nome da prioridade é obrigatório.',
            'nome_prioridade.unique' =>  'Prioridade já esta cadastrado.',
            'ordenacao.required' =>  'O campo ordem da prioridade é obrigatório.',
            'data_limite_atendimento.required' =>  'O campo tempo máximo de atendimento é obrigatório.',

        ];
    }
}
