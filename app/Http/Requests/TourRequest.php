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
            'name'                       => 'required|unique:tours,name',
            'price'                      => 'required|numeric',
            'number_of_day'              => 'required|numeric',
            'number_of_night'            => 'required|numeric',
            'desciption'                 => 'required',
            'destination_id'             => 'required'
        ];
    }

    public function messages() {
        return [
            'name.required'              => 'The name is required',
            'name.unique'                => 'This name has already been taken',
            'price.required'             => 'The price is required',
            'price.numeric'              => 'The price is numeric',
            'number_of_day.required'     => 'The number of day is required',
            'number_of_day.numeric'      => 'The price is numeric',
            'number_of_night.required'   => 'The number of night is required',
            'desciption.required'        => 'The desciption is required',
            'destination_id.required'    => 'The destination is required'
        ];
    }
}
