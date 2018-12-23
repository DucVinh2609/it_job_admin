<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;


class EmployerDetailRequest extends FormRequest
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
            'txt_IDEmployer'  => 'required',
            'txt_Address'    =>  'required',
            'txt_Employees'    =>  'required',
            'txt_Country'    =>  'required',
            'txt_WokingTime'    =>  'required',
            'txt_Overview'    =>  'required',
            'txt_Website'    =>  'required',
            'txt_LinkFacebook'    =>  'required'

      
        ];
    }

    public function messages(){
        return [
            'txt_IDEmployer.required'  =>  'Please enter ID Employer  ',
            'txt_Address.required'  =>  'Please enter Address ',
            'txt_Employees.required'  =>  'Please enter Employees ',
            'txt_Country.required'  =>  'Please enter Country ',
            'txt_WokingTime.required'  =>  'Please enter Woking Time ',
            'txt_Overview.required'  =>  'Please enter Overview',
            'txt_Website.required'  =>  'Please enter Website',
            'txt_LinkFacebook.required'  =>  'Please enter Link Facebook'
         


        ];
    }

}
