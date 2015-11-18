<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('departments', function(Blueprint $table)
		{
			$table->increments('dept_id');
			$table->string('dept_name');

			$table->integer('college_id');
			$table->foreign('college_id')->references('college_id')->on('colleges');

			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('departments');
	}

}
