<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;


class CVRequest extends FormRequest
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
            'txt_Name'  => 'required',
            'txt_Candidate'    =>  'required',
            'txt_Employer'    =>  'required',
            'CV'    =>  'required'

      
        ];
    }

    public function messages(){
        return [
            'txt_Name.required'  =>  'Please enter Name User  ',
            'txt_Candidate.required'  =>  'Please enter ID Candidate ',
            'txt_Employer.required'  =>  'Please enter ID Employer ',
            'CV.required'  =>  'Please enter Country '
            
         


        ];
    }

}
