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
            'user_id'    =>  'required',
            'job_id'    =>  'required',
            'cv'    =>  'required',
            'cover_letter'    =>  'required'

      
        ];
    }

    public function messages(){
        return [
            
            'user_id.required'  =>  'Please enter Name User  ',
            'job_id.required'  =>  'Please enter ID Candidate ',
            'cv.required'  =>  'Please enter ID Employer ',
            'cover_letter.required'  =>  'Please enter ID Employer '

         


        ];
    }

}
