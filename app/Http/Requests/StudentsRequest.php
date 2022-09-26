<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudentsRequest extends FormRequest
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
            'cpf' => 'string|required|min:14|max:14|unique:students',
            'email' => 'string|required|unique:students',
            'telefone' => 'string|required',
            'telefone-outro' => 'string',
            'apelido' => 'string',
            'zip' => 'string|required',
            'address' => 'string|required',
            'complement' => 'string|required',
            'neighborhood' => 'string|required',
            'uf' => 'string|required',
            'course' => 'integer|required',
            'horario' => 'string|required',
        ];
    }
}
