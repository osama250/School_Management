<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionsTable extends Migration
{

    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('Name_Section');
            $table->integer('Status');        /// disable or enable
            $table->bigInteger('Grade_id')->unsigned();    // relation one to many with grade
            $table->bigInteger('Class_id')->unsigned();   // relation one to many with Classroms
            $table->timestamps();
            $table->foreign('Grade_id')->references('id')->on('grades')->onDelete('cascade');
            $table->foreign('Class_id')->references('id')->on('classrooms')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sections');
    }
}
