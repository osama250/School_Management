<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessingFeesTable extends Migration
{

    public function up()
    { //   هنا بيتسجل المصاريف اللى الطالب مش هيدفعهاالمستبعدة وعلى انهى طالب  
        Schema::create('processing_fees', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->decimal('amount',8,2)->nullable(); 
            $table->string('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('processing_fees');
    }
}
