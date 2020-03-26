<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLandpostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landposts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('land_title');
            $table->string('land_interest');
            $table->string('state');
            $table->string('city');
            $table->string('numberOfPlot');
            $table->string('allocationNumber');
            $table->string('location_description');
            $table->string('survey_plan_no');
            $table->string('choose_lawyer');
            $table->string('title_pic');
            $table->string('survey_No');
            $table->string('survey_doc_pic');
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
        Schema::dropIfExists('landposts');
    }
}
