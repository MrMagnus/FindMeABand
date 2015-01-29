<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBandTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){

		Schema::create('bands', function(Blueprint $table){

			$table->increments('id');
			$table->string('name');
			$table->longText('description');
			$table->integer('age_min');
			$table->integer('age_max');
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
		Schema::drop('bands');
	}

}
