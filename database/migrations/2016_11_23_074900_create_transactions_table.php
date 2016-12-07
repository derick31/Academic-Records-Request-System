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
            $table->integer('alumnus_id')->unsigned()->index();
            $table->foreign('alumnus_id')->references('alumnus_id')->on('alumni')->onDelete('cascade');
            $table->integer('staff_id')->unsigned()->index()->nullable();
            $table->foreign('staff_id')->references('staff_id')->on('staff')->onDelete('cascade');
            $table->integer('purpose_id')->unsigned()->index()->nullable();
            $table->enum('retrieval_type',[0,1]);
            $table->enum('status',['pending','paid','ready for pickup','mailed','received'])->nullable();
            // $table->string('mailing_adress');
            $table->string('claim_code')->nullable();
            $table->string('receipt_number')->nullable();
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
