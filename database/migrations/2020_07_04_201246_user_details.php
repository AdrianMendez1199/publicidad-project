<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserDetails extends Migration
{
     /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('height', 50);
            $table->string('hair_color', 50);
            $table->string('eye_color', 50);
            $table->string('ethnicity', 50);
            $table->string('description', 400);
            $table->integer('bust');
            $table->integer('waist');
            $table->integer('hip');
            $table->string('phone', 50);
            $table->string('weight', 10);
            $table->date('date_of_birth');
            $table->enum('availability_travel', ['Y', 'N']);
            
            // Relation with user
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
             ->references('id')
             ->on('users');

            // Relation with country
            $table->unsignedBigInteger('country_id');
            $table->foreign('country_id')
             ->references('id')
             ->on('countries');

            // Relation with Province
            $table->unsignedBigInteger('province_id');
            $table->foreign('province_id')
             ->references('id')
             ->on('provinces');
            
            // Relation with neighborhood
            $table->unsignedBigInteger('neighborhood_id');
            $table->foreign('neighborhood_id')
             ->references('id')
             ->on('neighborhoods');

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
        Schema::dropIfExists('users_details');
    }
}
