<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;


class ContactRequest extends FormRequest
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
            'txtEmail'    =>  'required',       
            'txtPhone'    =>  'required',       
            'txtAddress'    =>  'required'
            
        ];
    }

    public function messages(){
        return [
            'txtEmail.required'  =>  'Please enter email ',
            'txtPhone.required'  =>  'Please enter phone',
            'txtAddress.required'  =>  'Please enter address '
      
        ];
    }

}
