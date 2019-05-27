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
            'image_path'    => 'required|image|mimes:jpeg,png,jpg,gif,bmp,svg|max:2048',
            'hotel_id'      => 'required'
        ];
    }

    public function messages(){
        return [
            'image_path.required'   =>  'Missing image',
            'image_path.image'      =>  'Only .jpeg, .jpg, .png, .gif, .bmp and .svg files are allowed',
            'image_path.mimes'      =>  'Only .jpeg, .jpg, .png, .gif, .bmp and .svg files are allowed',
            'image_path.max'        =>  'Picture is too big',
            'hotel_id.required'     =>  'Missing hotel_id',
        ];
    }
}
