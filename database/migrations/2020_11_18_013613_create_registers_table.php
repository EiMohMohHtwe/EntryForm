<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('birthday');
            $table->string('address');
            $table->string('email');
            $table->string('confirm_email');
            $table->string('hobby');
            $table->string('phone');
            $table->string('favorite_subject');
            $table->string('gpa');
            $table->string('roll_number');
            $table->string('jhs_period_from');
            $table->string('jhs_period_to');
            $table->string('jhs_school_name');
            $table->string('hs_period_from');
            $table->string('hs_period_to');
            $table->string('hs_school_name');
            $table->string('hs_science_ecnomics');
            $table->string('univ_period_from');
            $table->string('univ_period_to');
            $table->string('univ_school_name');
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
        Schema::dropIfExists('registers');
    }
}
