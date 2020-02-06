<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChildrenTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('children', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->text('Variety', 65535);
			$table->text('SizeandSpecifications', 65535);
			$table->text('Trademark', 65535);
			$table->text('Packing', 65535);
			$table->text('WeightofCarton', 65535);
			$table->text('BagsorCarton', 65535);
			$table->string('name', 500);
			$table->text('Fullquantity', 65535);
			$table->integer('category')->unsigned()->index('category');
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
		Schema::drop('children');
	}

}
