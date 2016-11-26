<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumniAttendedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni_attended', function (Blueprint $table) {
            $table->increments('alumni_attended_id');
            $table->integer('alumnus_id')->unsigned()->index();
            $table->foreign('alumnus_id')->references('alumnus_id')->on('alumni')->onDelete('cascade');
            $table->integer('school_id')->unsigned()->index();
            $table->foreign('school_id')->references('school_id')->on('attended_schools')->onDelete('cascade');
            $table->integer('degree_id')->unsigned()->index();
            $table->foreign('degree_id')->references('degree_id')->on('degrees')->onDelete('cascade');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('date_graduated');
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
        Schema::dropIfExists('alumni_attended');
    }
}
