<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingSchedulesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('training_schedules', function(Blueprint $table)
		{
			$table->increments('training_schedule_id');

			$table->integer('training_id');
			$table->foreign('training_id')->references('training_id')->on('trainings');

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
		Schema::drop('training_schedules');
	}

}
