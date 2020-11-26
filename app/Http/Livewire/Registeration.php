<?php

namespace App\Http\Livewire;

use App\Models\Applicant;
use App\Models\Family;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Tester\ApplicationTester;

class Registeration extends Component
{
    use WithFileUploads;

    public $image;
    public $name;
    public $birthday;
    public $address;
    public $email;
    public $confirm_email;
    public $gender;
    public $hobby;
    public $phone;
    public $blood_type;
    public $favorite_subject;
    public $favorite_programming_language;
    public $cooking;
    public $group_life_experience;
    public $color_blindness;
    public $tattoo;
    public $drinking;
    public $smoking;
    public $medical_history;
    public $gpa;
    public $roll_number;
    public $jhs_period_from;
    public $jhs_period_to;
    public $jhs_school_name;
    public $jhs_status;
    public $hs_period_from;
    public $hs_period_to;
    public $hs_school_name;
    public $hs_status;
    public $hs_science_ecnomics;
    public $hs_file;
    public $univ_period_from;
    public $univ_period_to;
    public $univ_school_name;
    public $univ_status;
    public $univ_school_year;
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

    public $family_name;
    public $relationship;
    public $age;
    public $job;
    public $live_together;
    public $agreement;

    public $families = [];
    public $i = 1;

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->families, $i);
    }

    public function remove($i)
    {
        unset($this->families[$i]);
    }

    protected $rules = [
        'image' => 'image|max:1024',
        'name' => 'required|max:30',
        'birthday' => 'required',
        'address' => 'required|max:300',
        'email' => 'required|email|unique:applicants',
        'confirm_email' => 'required|email',
        'gender' => 'required',
        'hobby' => 'required',
        'phone' => 'required|max:20',
        'blood_type' => 'required',
        'favorite_subject' => 'required',
        'favorite_programming_language' => 'required',
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
        'hs_status' => 'required',
        'hs_science_ecnomics' => 'required',
        'hs_file' => 'required|mimes:pdf|max:2048',
        'univ_period_from' => 'required',
        'univ_period_to' => 'required',
        'univ_school_name' => 'required',
        'univ_status' => 'required',
        'univ_faculty_department' =>  'required',
        'univ_file' => 'required|mimes:pdf|max:2048',
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

    protected $messages = [
        'family_name.*.required' => 'The family name Address cannot be empty.',
        'relationship.*.required' => 'Relationship cannot be empty.',
        'age.*.required' => 'Age cannot be empty.',
        'job.*.required' => 'Job cannot be empty.',
        'live_together.*.required' => 'Live Together cannot be empty.',
        'agreement.*.required' => 'Agreement cannot be empty.',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submit()
    {
        DB::transaction(function (){
            $this->validate();

            $folder = uniqid(now()->format('Ymd').'_');
            
            $profileImg = $this->image;
            $profileImgName = 'profile_img.' . $profileImg->getClientOriginalExtension();

            $hsDocument  = $this->hs_file;
            $hsDocumentName  = 'hs_document.' . $hsDocument ->getClientOriginalExtension();

            $univDocument = $this->univ_file;
            $univDocumentName  = 'univ_document.' . $univDocument->getClientOriginalExtension();

            $this->image->storeAs('ApplicantsDocuments/'.$folder, $profileImgName, 'public');
            $this->hs_file->storeAs('ApplicantsDocuments/'.$folder, $hsDocumentName, 'public');
            $this->univ_file->storeAs('ApplicantsDocuments/'.$folder, $univDocumentName, 'public');

            $applicant = new Applicant();

            $applicant->name = $this->name;
            $applicant->birthday = $this->birthday;
            $applicant->address = $this->address;
            $applicant->email = $this->email;
            $applicant->confirm_email = $this->confirm_email;
            $applicant->gender = $this->gender;
            $applicant->hobby = $this->hobby;
            $applicant->phone = $this->phone;
            $applicant->blood_type = $this->blood_type;
            $applicant->favorite_subject = $this->favorite_subject;
            $applicant->favorite_programming_language = $this->favorite_programming_language;
            $applicant->cooking = $this->cooking;
            $applicant->group_life_experience = $this->group_life_experience;
            $applicant->color_blindness = $this->color_blindness;
            $applicant->tattoo = $this->tattoo;
            $applicant->drinking = $this->drinking;
            $applicant->smoking = $this->smoking;
            $applicant->medical_history = $this->medical_history;
            $applicant->gpa = $this->gpa;
            $applicant->roll_number = $this->roll_number;
            $applicant->jhs_period_from = $this->jhs_period_from;
            $applicant->jhs_period_to = $this->jhs_period_to;
            $applicant->jhs_school_name = $this->jhs_school_name;
            $applicant->jhs_status = $this->jhs_status;
            $applicant->hs_period_from = $this->hs_period_from;
            $applicant->hs_period_to = $this->hs_period_to;
            $applicant->hs_school_name = $this->hs_school_name;
            $applicant->hs_status = $this->hs_status;
            $applicant->hs_science_ecnomics = $this->hs_science_ecnomics;
            $applicant->univ_period_from = $this->univ_period_from;
            $applicant->univ_period_to = $this->univ_period_to;
            $applicant->univ_school_name = $this->univ_school_name;
            $applicant->univ_status = $this->univ_status;
            $applicant->univ_school_year = $this->univ_school_year;
            $applicant->upload_dir = $folder;
            $applicant->univ_faculty_department = $this->univ_faculty_department;
            $applicant->question_happiest_event = $this->question_happiest_event;
            $applicant->question_hardest_event = $this->question_hardest_event;
            $applicant->question_worked_hard = $this->question_worked_hard;
            $applicant->question_outside_of_school = $this->question_outside_of_school;
            $applicant->question_future_workplace = $this->question_future_workplace;
            $applicant->question_poor_person = $this->question_poor_person;
            $applicant->question_speciality = $this->question_speciality;
            $applicant->question_weak = $this->question_weak;
            $applicant->question_emphasis = $this->question_emphasis;
            $applicant->question_it_technology = $this->question_it_technology;

            $applicant->save();

            if($this->family_name != null) {
                $validateData = $this->validate([
                    'family_name.0'     => 'required',
                    'relationship.0'    => 'required',
                    'age.0'             => 'required',
                    'job.0'             => 'required',
                    'live_together.0'   => 'required',
                    'agreement.0'       => 'required',
                    'family_name.*'     => 'required',
                    'relationship.*'    => 'required',
                    'age.*'             => 'required',
                    'job.*'             => 'required',
                    'live_together.*'   => 'required',
                    'agreement.*'       => 'required',
                ]);

                foreach ($this->family_name as $key => $value) {
                   Family::create([
                       'applicant_id' => $applicant->id,
                       'family_name' => $this->family_name[$key],
                       'relationship' => $this->relationship[$key],
                       'age' => $this->age[$key],
                       'job' => $this->job[$key],
                       'live_together' => $this->live_together[$key],
                       'agreement' => $this->agreement[$key]
                   ]);
               }
            }
        });

        session()->flash('notification', 'Success to save');

        return redirect()->to('/register');
    }

    public function render()
    {
        return view('livewire.registeration');
    }
}
