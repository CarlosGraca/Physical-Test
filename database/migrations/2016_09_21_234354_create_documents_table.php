<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDocumentsTable extends Migration {

	public function up()
	{
		Schema::create('documents', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 100);
			$table->integer('item_id')->index();
			$table->string('itemType', 50)->index();
			$table->string('fullPath', 4000);
			$table->string('mimetype', 50);
			$table->enum('mediaType', array('VIDEO:IMAGE;DOC;'));
			$table->integer('user_create_id')->index();
			$table->timestamps();
			$table->softDeletes();
		});
	}

	public function down()
	{
		Schema::drop('documents');
	}
}