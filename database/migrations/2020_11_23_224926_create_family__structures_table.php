<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyStructuresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_structures', function (Blueprint $table) {
            $table->id();
            $table->integer('applicant_id');
            $table->string('family_name');
            $table->integer('relationship');
            $table->tinyInteger('age');
            $table->string('job');
            $table->tinyInteger('live_together');
            $table->tinyInteger('agreement');
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
        Schema::dropIfExists('family_structures');
    }
}
