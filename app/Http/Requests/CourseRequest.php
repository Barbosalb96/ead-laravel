<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseRequest extends FormRequest
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
        $rules = [
            'name' => 'required',
            'amount_period' => 'required',
            'shift' => 'required',
            'modality' => 'required',
            'description' => 'required|min:20',
            'price' => 'required'
        ];

        if (in_array($this->method(), ['POST'])) {
            $rules['name'] = 'required|unique:courses';
        }

        return $rules;

    }
}
