<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeesTable extends Migration
{

    public function up()
    {  //   بحفظ فيه كل الرسوم الدراسية اسعار كل مرحلة وكل صف  
        Schema::create('fees', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->decimal('amount',8,2);
            $table->string('description')->nullable();
            $table->string('year');
            $table->integer('Fee_type');
            $table->timestamps();
            $table->foreignId('Grade_id')->references('id')->on('Grades')->onDelete('cascade');
            $table->foreignId('Classroom_id')->references('id')->on('Classrooms')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('fees');
    }
}
