<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserRoleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_role', function(Blueprint $table)
		{
			$table->increments('id');
					
			$table->integer('user_id');
			$table->foreign('user_id')->references('id')->on('users');
				
			$table->enum('training_role', array('trainor','participant'));
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
		Schema::drop('user_role');
	}

}
