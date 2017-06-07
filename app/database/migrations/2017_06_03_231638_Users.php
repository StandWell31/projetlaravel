<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Users', function(Blueprint $table) 
		{
          $table->increments('id');
          $table->string('username', 128)->unique();
		  $table->string('email', 255)->unique();
          $table->string('password', 64);
          $table->string('remember_token', 100)->nullable();
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
		//
	}

}
