<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestinationRequest extends FormRequest
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
            'label' => 'required|unique:destinations,label,'.$this->get('id')
          ];
    }

    public function messages()
    {
        return [
          'label.required' => 'Destination is required',
          'label.unique' => 'This destination already exists'
        ];
    }
}
