<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWebsitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create("websites", function($table){
                    $table->increments('id');
                    $table->string('name',32);
                    $table->string('web_address')->unique();
                });
                
                Schema::create('user_website', function($table){
                    $table->increments('id');
                    $table->integer('website_id');
                    $table->integer('user_id');
               
                    $table->index(array('id','website_id', 'user_id'));
                });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('websites');
                Schema::drop('website_user');
	}

}
