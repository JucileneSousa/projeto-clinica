<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdatePacienteRequest extends FormRequest
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
            //Regras de Validação
            'prontuario' => 'required|numeric',
            'nome' => 'required|min:3|max:255',
        ];
    }

    public function messages()
    {
        return [
            'prontuario.required' => 'Por favor, insira o nº do prontuário.',
            'prontuario.numeric' => 'O nº do prontuário deve conter apenas números.',
            'prontuario.min' => 'O nº do prontuário deve ter ao menos 3 digitos.',
            'nome.required' => 'Por favor, insira o nome do paciente.',
            'nome.min' => 'O nome do paciente deve ter ao menos 3 caracteres.',
        ];
    }
}
