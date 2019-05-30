<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelImageRequest extends FormRequest
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
            'hotel_id'      => 'required'
        ];
    }

    public function messages(){
        return [
            'hotel_id.required'     =>  'Hotel id is requiered',
        ];
    }
}
