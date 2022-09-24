<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlunoRequest extends FormRequest
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
            'name' => 'required|min:3',
            'cpf' => 'string|required|min:14|max:14|unique:alunos',
            'email' => 'string|required|unique:alunos',
            'telefone' => 'string|required',
            'telefone-outro' => 'string',
            'apelido' => 'string',
            'cep' => 'string|required',
            'endereco' => 'string|required',
            'complemento' => 'string|required',
            'bairro' => 'string|required',
            'uf' => 'string|required',
            'curso' => 'integer|required',
            'horario' => 'string|required',
        ];
    }
}
