<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = [
        'name', 'sex', 'birthday', 'address','phone','email','confirm_email','blood_type',
        'Personaily','strength','weakness','hobby','favorite_subject','cooking','group_life_experience',
        'eye_sight_left','eye_sight_right','color_blindness','tattoo','drinking','smoking','medical_history',
        'medical_history_text','jhs_period_from','jhs_period_to','jhs_school_name',
        'jhs_status','hs_period_from','hs_period_to','hs_school_name','hs_faculty_department','hs_status','hs_upload_dir',
        'univ_period_from','univ_period_to','univ_school_name','univ_faculty_department','univ_status',
        'univ_school_year','upload_dir','question_happiest_event','question_hardest_event','question_worked_hard',
        'question_outside_of_school','question_future_workplace','question_poor_person','question_emphasis',
        'question_weak','question_speciality','question_it_technology'
    ];

    public function families()
    {
        return $this->hasMany(Family::class);
    }
}
