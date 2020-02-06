<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNutritionfactsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nutritionfacts', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('name', 65535);
			$table->text('paragraph', 65535);
			$table->string('image', 2000);
			$table->string('URL', 500);
			$table->text('pdffile', 65535)->nullable();
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
		Schema::drop('nutritionfacts');
	}

}
