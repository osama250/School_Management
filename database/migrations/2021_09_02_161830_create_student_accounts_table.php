<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentAccountsTable extends Migration
{

    public function up()
    { //   هنا بنسجل كل العمليات اللى بتحصل لطالب سواء عليه فاتورة بكام او دفع كام  ومتبقى عليه كام
      //   او استبعد عليه مبلغ معين مش هيدفعو
        Schema::create('student_accounts', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('type');
            $table->decimal('Debit',8,2)->nullable();
            $table->decimal('credit',8,2)->nullable();
            $table->string('description')->nullable();
            $table->timestamps();
            $table->foreignId('fee_invoice_id')->nullable()->references('id')
                    ->on('fee_invoices')->onDelete('cascade');
            $table->foreignId('receipt_id')->nullable()->references('id')
                    ->on('receipt_students')->onDelete('cascade');
            $table->foreignId('processing_id')->nullable()->references('id')
                    ->on('processing_fees')->onDelete('cascade');
            $table->foreignId('payment_id')->nullable()->references('id')
                    ->on('payment_students')->onDelete('cascade');
            $table->foreignId('student_id')->references('id')->on('students')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('student_accounts');
    }
}
