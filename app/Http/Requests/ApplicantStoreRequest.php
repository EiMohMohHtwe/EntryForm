<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicantStoreRequest extends FormRequest
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
        $rules = [
            'name' => 'required|max:30',
            'birthday' => 'required',
            'address' => 'required|max:300',
            'email' => 'required|email|unique:applicants',
            'confirm_email' => 'required|email',
            'gender' => 'required',
            'hobby' => 'required',
            'phone' => 'required|max:20',
            'favorite_subject' => 'required',
            'cooking' => 'required',
            'group_life_experience' => 'required',
            'color_blindness' => 'required',
            'tattoo' => 'required',
            'drinking' => 'required',
            'smoking' => 'required',
            'medical_history' => 'required',
            'gpa' => 'required',
            'roll_number' => 'required',
            'jhs_period_from' => 'required',
            'jhs_period_to' => 'required',
            'jhs_school_name' => 'required',
            'hs_period_from' => 'required',
            'hs_period_to' => 'required',
            'hs_school_name' => 'required',
            'hs_science_ecnomics' => 'required',
            'hs_file' => 'required',
            'univ_period_from' => 'required',
            'univ_period_to' => 'required',
            'univ_school_name' => 'required',
            'univ_faculty_department' =>  'required',
            'univ_file' => 'required',
            'question_happiest_event' => 'required|max:500',
            'question_hardest_event' => 'required|max:500',
            'question_worked_hard' => 'required|max:500',
            'question_outside_of_school' => 'required|max:500',
            'question_future_workplace' => 'required|max:500',
            'question_poor_person' => 'required|max:500',
            'question_emphasis' => 'required|max:500',
            'question_weak' => 'required|max:500',
            'question_speciality'  => 'required|max:500',
            'question_it_technology'  => 'required|max:500'
        ];

        return $rules;
    }
}
