<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvTypeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('inv_type', function(Blueprint $table)
		{
			$table->increments('inv_type_id');
			
			$table->string('person_type');

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
		Schema::drop('inv_type');
	}

}
