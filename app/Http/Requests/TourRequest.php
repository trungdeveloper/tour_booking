<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
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
            'name'                       => 'required|unique:tours,name,'.$this->get('id'),
            'price'                      => 'required|numeric',
            'number_of_days'             => 'required|numeric',
            'number_of_nights'           => 'required|numeric',
            'destination_id'             => 'required'
        ];
    }

    public function messages() {
        return [
            'name.required'              => 'Tour name is required',
            'name.unique'                => 'Tour name has already been taken',
            'destination_id.required'    => 'The destination is required',
            'number_of_days.required'    => 'The number of days is required',
            'number_of_days.numeric'     => 'The number of days must be numeric',
            'number_of_nights.required'  => 'The number of nights is required',
            'number_of_nights.numeric'   => 'The number of nights must be numeric',
            'price.required'             => 'The price is required',
            'price.numeric'              => 'The price must be numeric'
        ];
    }
}
