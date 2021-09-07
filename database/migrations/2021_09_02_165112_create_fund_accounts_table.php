<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFundAccountsTable extends Migration
{

    public function up()
    {   //   هنا بيتسجل المصاريف اللى دفعها الطالب للمدرسة  ورقم الفاتورة اللى ادفعت
        Schema::create('fund_accounts', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('Debit',8,2)->nullable();
            $table->decimal('credit',8,2)->nullable();
            $table->string('description');
            $table->timestamps();
            $table->foreignId('receipt_id')->nullable()->references('id')
                    ->on('receipt_students')->onDelete('cascade');
            $table->foreignId('payment_id')->nullable()->references('id')
                    ->on('payment_students')->onDelete('cascade'); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('fund_accounts');
    }
}
