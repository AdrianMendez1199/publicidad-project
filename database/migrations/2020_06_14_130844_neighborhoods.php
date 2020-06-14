<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Neighborhoods extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
   public function up()
   {
       Schema::create('neighborhoods', function (Blueprint $table) {
           $table->bigIncrements('id');
           $table->string('neighborhood', 180);

           $table->unsignedBigInteger('province_id');
           $table->foreign('province_id')
            ->references('id')
            ->on('provinces');
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
       Schema::dropIfExists('provinces');
   }
}
