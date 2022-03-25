<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTicketsRequest extends FormRequest
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
            'categoria_id' => 'required',
            'prioridade_id' => 'required',
            'titulo' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'categoria_id.required' => 'O campo categoria é obrigatório.',
            'prioridade_id.required' =>  'O campo prioridade é obrigatório.',
            'titulo.required' => 'O campo titulo é obrigatório.',
        ];
    }
}
