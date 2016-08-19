<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpeakersTable extends Migration
{
    public function up()
    {
        Schema::create('speakers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('email');
            $table->string('job_title');
            $table->string('talk_name');
            $table->string('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('speakers');
    }
}
