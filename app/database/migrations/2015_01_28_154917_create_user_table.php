<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table){
    
    	$table->increments('id');
			$table->string('name');
			$table->integer('birth_year');
			$table->string('email');
			$table->longText('description');
			$table->string('residency');
			$table->string('profile_image_url');
			$table->string('banner_image_url');
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
		Schema::drop('users');
	}

}
