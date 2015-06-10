<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('tasks', function($table){
            //autoincremento
         $table ->increments('id');
        //columnas
        $table->string('name',100);
        $table->date('due_date');
        $table->boolean('done');
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
        Schema::drop('tasks');
		//
	}

}
