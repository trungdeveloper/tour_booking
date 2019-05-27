<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourImageRequest extends FormRequest
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
            'image_path'                 =>     'required|unique:tour_images,image_path,'.$this->get('id'),
            'tour_id'                    =>     'required',
            'is_main'                    =>     'required|numeric',
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
          'image_path.required'   => 'The image path label is required',
          'image_path.unique'     => 'This image path label has already been taken',
          'tour_id.required'    => 'The tour id is required',
          'is_main.required'    => 'The is main is required',
          'is_main.numeric'     => 'The is main must be numeric'
        ];
    }
}
