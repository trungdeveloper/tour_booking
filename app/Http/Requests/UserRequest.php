<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'first_name'        => 'required',
            'last_name'         => 'required',
            'DoB'               => 'required',
            'address'           => 'required',
            'user_type_id'      => 'required',
            'country_id'        => 'required',
            'title_id'          => 'required',
            'identification_type_id'    => 'required',
            'email'             => 'required|unique:users,email,'.$this->get('id'),
            'phone'             => 'required|unique:users,phone,'.$this->get('id'),
            'identification_number'       => 'required|numeric|unique:users,identification_number,'.$this->get('id')
        ];
    }

    public function messages()
    {
        return [
          'first_name.required'     => 'The first name is required',
          'last_name.required'      => 'The last name is required',
          'DoB.required'            => 'The DoB is required',
          'address.required'        => 'The address is required',
          'user_type_id.required'   => 'The user category is required',
          'title_id.required'       => 'The title is required',
          'identification_type_id.required'  => 'The identification is required',
          'email.required'          => 'The email is required',
          'email.unique'            => 'This email has already been taken',
          'phone.required'          => 'The phone number is required',
          'phone.unique'            => 'This phone number has already been taken',
          'identification_number.required'  => 'The identification number is required',
          'identification_number.unique'    => 'This identification number has already been taken',
          'identification_number.nummeric'  => 'The identification number is number',
        ];
    }
}
