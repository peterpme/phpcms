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
            Schema::create('users', function($table){
                $table->increments('id');
                $table->string('firstname', 20);
                $table->string('lastname', 20);
                $table->string('email', 100)->unique();
                $table->string('password', 64);
                $table->text('remember_token', 100)->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
            
//            Schema::create('role_user', function($table){
//                $table->increments('id');
//                $table->integer('role_id');
//                $table->integer('user_id');
//                
//                $table->index(array('id', 'role_id', 'user_id'));
//            });
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
