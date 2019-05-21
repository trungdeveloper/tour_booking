<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
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
            'label' => 'required|unique:service,label,'.$this->get('id'),
            'price' => 'required|numeric:service,price,'.$this->get('id')

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
          'label.required'  => 'The price is required',
          'label.unique'    => 'This price has already been taken',
          'price.required'  => 'The price is required',
          'price.numeric'   => 'The price is number'

        ];
    }
}
