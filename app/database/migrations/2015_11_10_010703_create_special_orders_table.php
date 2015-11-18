<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpecialOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('special_orders', function(Blueprint $table)
		{
			$table->increments('special_order_id');
			$table->double('ref_no');
			$table->string('title');
			$table->string('recipient');
			$table->string('office');
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
		Schema::drop('special_orders');
	}

}
