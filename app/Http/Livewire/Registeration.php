<?php

namespace App\Http\Livewire;

use App\Models\Register;
use Livewire\Component;
use Livewire\WithFileUploads;

class Registeration extends Component
{
    use WithFileUploads;

    public $image;
    public $name;
    public $birthday;
    public $address;
    public $email;
    public $confirm_email;
    public $hobby;
    public $phone;
    public $favorite_subject;
    public $gpa;
    public $roll_number;
    public $jhs_period_from;
    public $jhs_period_to;
    public $jhs_school_name;
    public $hs_period_from;
    public $hs_period_to;
    public $hs_school_name;
    public $hs_science_ecnomics;
    public $hs_file;
    public $univ_period_from;
    public $univ_period_to;
    public $univ_school_name;
    public $univ_faculty_department;
    public $univ_file;
    public $question_happiest_event;
    public $question_hardest_event;
    public $question_worked_hard;
    public $question_outside_of_school;
    public $question_future_workplace;
    public $question_poor_person;
    public $question_speciality;
    public $question_weak;
    public $question_emphasis;
    public $question_it_technology;

    public function submit()
    {
        $this->validate([
            'image' => 'image|max:1024',
            'hs_file' => 'image|max:1024',
            'univ_file' => 'image|max:1024',
        ]);

        $this->image->store('images');
        $this->hs_file->store('images');
        $this->univ_file->store('images');

        $register = new Register();

        $register->name = $this->name;
        $register->birthday = $this->birthday;
        $register->address = $this->address;
        $register->email = $this->email;
        $register->confirm_email = $this->confirm_email;
        $register->hobby = $this->hobby;
        $register->phone = $this->phone;
        $register->favorite_subject = $this->favorite_subject;
        $register->gpa = $this->gpa;
        $register->roll_number = $this->roll_number;
        $register->jhs_period_from = $this->jhs_period_from;
        $register->jhs_period_to = $this->jhs_period_to;
        $register->jhs_school_name = $this->jhs_school_name;
        $register->hs_period_from = $this->hs_period_from;
        $register->hs_period_to = $this->hs_period_to;
        $register->hs_school_name = $this->hs_school_name;
        $register->hs_science_ecnomics = $this->hs_science_ecnomics;
        $register->univ_period_from = $this->univ_period_from;
        $register->univ_period_to = $this->univ_period_to;
        $register->univ_school_name = $this->univ_school_name;
        $register->univ_faculty_department = $this->univ_faculty_department;
        $register->question_happiest_event = $this->question_happiest_event;
        $register->question_hardest_event = $this->question_hardest_event;
        $register->question_worked_hard = $this->question_worked_hard;
        $register->question_outside_of_school = $this->question_outside_of_school;
        $register->question_future_workplace = $this->question_future_workplace;
        $register->question_poor_person = $this->question_poor_person;
        $register->question_speciality = $this->question_speciality;
        $register->question_weak = $this->question_weak;
        $register->question_emphasis = $this->question_emphasis;
        $register->question_it_technology = $this->question_it_technology;

        $register->save();

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.registeration');
    }
}
