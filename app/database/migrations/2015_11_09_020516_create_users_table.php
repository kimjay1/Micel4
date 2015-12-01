<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('fname', 32);
			$table->string('mname', 32);
			$table->string('lname', 32);
			$table->enum('app_role', array('admin', 'user'));
			$table->string('username', 32);
			$table->string('email', 255);
			$table->string('password', 64);
			//add a new nullable remember_token of VARCHAR(100), TEXT
			$table->TEXT('remember_token', 100)->nullable();
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
		Schema::drop('users');
	}

}
