<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;


class PostRequest extends FormRequest
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
            'txtTitle'  => 'required',
            'txtDescription'    =>  'required',
            'txtRequirement'    =>  'required',
            'txtSalary'    =>  'required',
            'txtAmount_of_people'    =>  'required',
            'dateStart_day'    =>  'required',
            'dateEnd_day'    =>  'required',
            'txtIDSkill'    =>  'required',
            'txtIDEmployer'    =>  'required',
            'post_time'    =>  'required'

      
        ];
    }

    public function messages(){
        return [
            'txtTitle.required'  =>  'Please enter Title  ',
            'txtDescription.required'  =>  'Please enter descriptions ',
            'txtRequirement.required'  =>  'Please enter requirement ',
            'txtSalary.required'  =>  'Please enter salary ',
            'txtAmount_of_people.required'  =>  'Please enter Amount of people ',
            'dateStart_day.required'  =>  'Please enter Start day ',
            'dateEnd_day.required'   => 'Plaese enter End day',
            'txtIDSkill.required'  =>  'Please enter ID Skill ',
            'txtIDEmployer.required'  =>  'Please enter ID Employer ',
            'post_time.required'  =>  'Please enter Post Time '
         


        ];
    }

}
