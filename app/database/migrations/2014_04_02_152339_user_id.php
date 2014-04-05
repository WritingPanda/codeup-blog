<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserId extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('posts', function($table)
		{
			$user = User::first();

		    $table->integer('user_id')->default($user->id)->unsigned();
		    $table->foreign('user_id')->references('id')->on('users');
		});
		
	    DB::statement('ALTER TABLE posts ALTER user_id DROP DEFAULT');
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('posts', function($table)
		{
		    $table->dropForeign('posts_user_id_foreign');
		    $table->dropColumn('user_id');
		});
	}

}