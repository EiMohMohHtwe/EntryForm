<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('birthday');
            $table->string('address');
            $table->string('email');
            $table->string('confirm_email');
            $table->string('gender');
            $table->string('hobby');
            $table->string('phone');
            $table->string('blood_type');
            $table->string('favorite_subject');
            $table->string('favorite_programming_language');
            $table->string('cooking');
            $table->string('group_life_experience');
            $table->string('eye_sight_left')->nullable();
            $table->string('eye_sight_right')->nullable();
            $table->string('color_blindness');
            $table->string('tattoo');
            $table->string('drinking');
            $table->string('smoking');
            $table->string('medical_history');
            $table->string('gpa');
            $table->string('roll_number');
            $table->string('jhs_period_from');
            $table->string('jhs_period_to');
            $table->string('jhs_school_name');
            $table->string('jhs_status');
            $table->string('hs_period_from');
            $table->string('hs_period_to');
            $table->string('hs_school_name');
            $table->string('hs_status');
            $table->string('hs_science_ecnomics');
            $table->string('univ_period_from');
            $table->string('univ_period_to');
            $table->string('univ_school_name');
            $table->string('univ_status');
            $table->string('univ_school_year');
            $table->string('upload_dir')->nullable();
            $table->string('univ_faculty_department');
            $table->string('question_happiest_event');
            $table->string('question_hardest_event');
            $table->string('question_worked_hard');
            $table->string('question_outside_of_school');
            $table->string('question_future_workplace');
            $table->string('question_poor_person');
            $table->string('question_speciality');
            $table->string('question_weak');
            $table->string('question_emphasis');
            $table->string('question_it_technology');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
