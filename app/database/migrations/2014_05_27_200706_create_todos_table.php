<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTodosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('todo', function(Blueprint $table) {
			$table->increments('id')->unsigned();
			$table->string('title')->nullable();
			$table->string('body', 1024)->nullable();
			$table->boolean('completed')->default(0);
			$table->timestamps();

		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('todo');
	}

}
