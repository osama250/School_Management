<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassroomsTable extends Migration {

	public function up()
	{
		Schema::create('classrooms', function(Blueprint $table) {
			$table->id();
			$table->string('Name_Class');
			$table->bigInteger('Grade_id')->unsigned();
			$table->timestamps();
            $table->foreign('Grade_id')->references('id')->on('grades')->onDelete('cascade');
		});
	}

	public function down()
	{
		Schema::drop('Classrooms');
	}
}
