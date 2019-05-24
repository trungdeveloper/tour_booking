<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
            'name'                  => 'required|unique:hotels,name,'.$this->get('id'),
            'address'               => 'required',
            'phone'                 => 'required',
            'email'                 => 'required',
            'price'                 => 'required|numeric',
            'rating'                => 'required',
            'destination_id'        => 'required'
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
          'name.required'             => 'The hotel name is required',
          'name.unique'               => 'This hotel name has already been taken',
          'address.required'          => 'The hotel address is required',
          'phone.required'            => 'The hotel phone is required',
          'email.required'            => 'The hotel email is required',
          'price.required'            => 'The hotel price is required',
          'price.numeric'             => 'This hotel price is number',
          'rating.required'           => 'The hotel rating is required',
          'destination_id.required'   => 'The hotel place is required'
        ];
    }
}
