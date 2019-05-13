<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParticipantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('street_address');
            $table->string('city');
            $table->string('state');
            $table->unsignedInteger('zip_code');
            $table->string('email');
            $table->string('phone_number');
            $table->tinyInteger('shirt_size');
            $table->tinyInteger('event1');
            $table->string('event1_partner')->nullable();
            $table->tinyInteger('event2')->nullable();
            $table->string('event2_partner')->nullable();
            $table->string('signed_name');
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
        Schema::dropIfExists('participants');
    }
}
