<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDaysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('days', function(Blueprint $table)
		{
			$table->increments('day_id');
			$table->dateTime('timeStart');
			$table->dateTime('timeEnd');
			$table->boolean('meridian');

			$table->integer('training_sched_id');
			$table->foreign('training_sched_id')->references('training_schedule_id')->on('training_schedules');

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
		Schema::drop('days');
	}

}
