<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Validator;


class CandidateRequest extends FormRequest
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
            'txt_CandidateName'  => 'required',
            'CandidateCV'    =>  'required',
            'txt_CandidateCoverLetter'    =>  'required',
            'txt_Email'    =>  'required',
            'txt_Password'    =>  'required',
            'CandidateImage'    =>  'required'

      
        ];
    }

    public function messages(){
        return [
            'txt_CandidateName.required'  =>  'Please enter Name  ',
            'CandidateCV.required'  =>  'Please up CV ',
            'txt_CandidateCoverLetter.required'  =>  'Please enter Cover letter ',
            'txt_Email.required'  =>  'Please uenter Email',
            'txt_Password.required'  =>  'Please enter Password ',
            'CandidateImage.required'  =>  'Please up Image'


        ];
    }

}
