<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;


class EmployerRequest extends FormRequest
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
            'txt_EmployerName'  => 'required',
            'txt_EmployerDecription'    =>  'required',
            'txt_EmployerLocation'    =>  'required',
            'EmployerImageAvatar'    =>  'required',
            'EmployerImageCover'    =>  'required'

      
        ];
    }

    public function messages(){
        return [
            'txt_EmployerName.required'  =>  'Please enter Name  ',
            'txt_EmployerDecription.required'  =>  'Please enter descriptions ',
            'txt_EmployerLocation.required'  =>  'Please enter location ',
            'EmployerImageAvatar.required'  =>  'Please up image avatar ',
            'EmployerImageCover.required'  =>  'Please up image cover '
         


        ];
    }

}
