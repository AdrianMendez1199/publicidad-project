<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Payment extends Migration
{
   /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('status', ['FAILED', 'APROVED', 'PENDING']);
            $table->string('payment_request_token', 100);
            $table->unsignedBigInteger('plan_id');
            $table->foreign('plan_id')
             ->references('id')
             ->on('plans');

             $table->unsignedBigInteger('user_id');
             $table->foreign('user_id')
              ->references('id')
              ->on('users');
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
        Schema::dropIfExists('payments');
    }
}
