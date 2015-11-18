<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attendances', function(Blueprint $table)
		{
			$table->increments('attendance_id');

			$table->integer('training_sched_id');
			$table->foreign('training_sched_id')->references('training_schedule_id')->on('training_schedules');

			$table->boolean('attended');
			$table->boolean('completed');
			
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
		Schema::drop('attendances');
	}

}
