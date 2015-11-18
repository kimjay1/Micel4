<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingsPersonsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('trainings_persons', function(Blueprint $table)
		{
			$table->increments('training_person_id');

			$table->integer('training_id');
			$table->foreign('training_id')->references('training_id')->on('trainings');

			$table->integer('person_id');
			$table->foreign('person_id')->references('person_id')->on('persons');

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
		Schema::drop('trainings_persons');
	}

}
