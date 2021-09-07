<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeInvoicesTable extends Migration
{

    public function up()
    { //   بحفظ فيه الفاتورة دى على انهى طاالب عندى فى السيستم وانهى فاتورة بالظبط من جدول الفواتير 
        Schema::create('fee_invoices', function (Blueprint $table) {
            $table->id();
            $table->date('invoice_date');
            $table->decimal('amount',8,2);
            $table->string('description')->nullable();
            $table->timestamps();
            $table->foreignId('student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreignId('Grade_id')->references('id')->on('Grades')->onDelete('cascade');
            $table->foreignId('Classroom_id')->references('id')->on('Classrooms')->onDelete('cascade');
            $table->foreignId('fee_id')->references('id')->on('fees')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('fee_invoices');
    }
}
