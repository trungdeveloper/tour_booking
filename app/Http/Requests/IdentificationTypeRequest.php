<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IdentificationTypeRequest extends FormRequest
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
          'label' => 'required|unique:identification_types,label,'.$this->get('id')
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
          'label.required' => 'The identification type label is required',
          'label.unique' => 'This identification type label has already been taken'
        ];
    }
}
