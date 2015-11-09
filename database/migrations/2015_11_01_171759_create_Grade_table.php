<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGradeTable extends Migration {

	public function up()
	{
		Schema::create('Grade', function(Blueprint $table) {
			$table->increments('id');
            $table->string("name")->unique();
            $table->tinyInteger("order");
			$table->timestamps();

		});
	}

	public function down()
	{
		Schema::drop('Grade');
	}
}