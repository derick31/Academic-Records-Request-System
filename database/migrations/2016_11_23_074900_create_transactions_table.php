<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('transaction_id');
            $table->integer('alummnus_id')->unsigned()->index();
            // $table->foreign('alummnus_id')->references('alumnus_id')->on('alumni')->onDelete('cascade');
            $table->integer('staff_id')->unsigned()->index();
            // $table->foreign('staff_id')->references('staff_id')->on('staff')->onDelete('cascade');
            $table->integer('purpose_id')->unsigned()->index();
            $table->enum('retrieval_type',[0,1]);
            $table->enum('status',['pending','paid','ready for pickup','mailed','received']);
            $table->string('mailing_adress');
            $table->string('claim_code');
            $table->string('receipt_number');
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
        Schema::dropIfExists('transactions');
    }
}
