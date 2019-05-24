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
            'phone'                 => 'required|unique:hotels,phone,'.$this->get('id'),
            'email'                 => 'required|unique:hotels,email,'.$this->get('id'),
            'website'               => 'required|unique:hotels,website,'.$this->get('id'),
            'price'                 => 'required|numeric',
            'rating'                => 'required',
            'destination_id'        => 'required',
            'number_of_nights'       => 'required|numeric',
            'description'           => 'required'
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
          'name.required'             => 'The hotel type name is required',
          'name.unique'               => 'This hotel name has already been taken',
          'address.required'          => 'The hotel address is required',
          'phone.required'            => 'The hotel phone is required',
          'phone.numeric'             => 'This hotel phone is number',
          'email.required'            => 'The hotel email is required',
          'email.unique'              => 'This hotel email has already been taken',
          'website.required'          => 'The hotel website is required',
          'website.unique'            => 'This hotel website has already been taken',
          'price.required'            => 'The hotel price is required',
          'price.numeric'             => 'This hotel price is number',
          'rating.required'           => 'The hotel rating is required',
          'destination_id.required'   => 'The hotel description_id is required',
          'number_of_nights.required'  => 'The hotel number_of_nights is required',
          'number_of_nights.numeric'   => 'This hotel number_of_nightsis number',
          'description.required'      => 'The hotel description is required'
        ];
    }
}
