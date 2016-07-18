<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLecturesTable extends Migration
{
    
    public function up()
    {
        Schema::create('lectures', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->unsigned();
            $table->string('name');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('lectures');
    }
}
