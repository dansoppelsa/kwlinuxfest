<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rsvp extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rsvp', function(Blueprint $table) {
            $table->increments('id');
            $table->dateTime('created_at');
            $table->dateTime('updated_at');
            $table->string('full_name');
            $table->string('email');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rsvp');
    }
}
