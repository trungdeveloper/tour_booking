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
            'name' => 'required|unique:hotels,name,'.$this->get('id'),
            'phone' => 'required|numeric:hotels,phone,'.$this->get('id'),
            'website' => 'required|unique:hotels,website,'.$this->get('id'),
            'price' => 'required|numeric:hotels,price,'.$this->get('id'),
            'rating' => 'required|numeric:hotels,rating,'.$this->get('id'),
            'description_id' => 'required|numeric:hotels,description_id,'.$this->get('id'),
            'number_of_night' => 'required|numeric:hotels,number_of_night,'.$this->get('id'),
            'description' => 'required'.$this->get('id'),
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
          'phone.required'            => 'The hotel phone is required',
          'phone.numeric'             => 'This hotel phone is number',
          'website.required'          => 'The hotel website is required',
          'website.unique'            => 'This hotel website has already been taken',
          'price.required'            => 'The hotel price is required',
          'price.numeric'             => 'This hotel price is number',
          'rating.required'           => 'The hotel rating is required',
          'description_id.required'   => 'The hotel description_id is required',
          'description_id.numeric'    => 'This hotel description_id is number',
          'number_of_night.required'  => 'The hotel number_of_night is required',
          'number_of_night.numeric'   => 'This hotel number_of_nightis number',
          'description.required'      => 'The hotel description is required',
        ];
    }
}
