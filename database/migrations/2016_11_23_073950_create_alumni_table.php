<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumniTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumni', function (Blueprint $table) {
            $table->increments('alumnus_id');
            // $table->string('alumnus_password');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->string('student_number');
            $table->string('address');
            $table->string('contact_number');
            $table->string('email');
            $table->string('birthplace');
            $table->string('father_name');
            $table->string('mother_name');
            $table->integer('degree_id')->unsigned()->index();
            $table->foreign('degree_id')->references('degree_id')->on('degrees')->onDelete('cascade');
            $table->integer('year_started');
            $table->integer('year_ended');
            $table->integer('apply_status')->nullable();    //added nov 26
            $table->date('apply_date');         //added nov 26
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
        Schema::dropIfExists('alumni');
    }
}
