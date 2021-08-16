<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{

    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('Email')->unique();
            $table->string('Password');
            $table->string('Name');
            $table->bigInteger('Specialization_id')->unsigned();
            $table->bigInteger('Gender_id')->unsigned();
            $table->date('Joining_Date');
            $table->text('Address');
            $table->timestamps();

            $table->foreign('Specialization_id')->references('id')->on('specializations')->onDelete('cascade');
            $table->foreign('Gender_id')->references('id')->on('genders')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
