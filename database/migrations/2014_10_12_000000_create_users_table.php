<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->timestamp('birthdate');
            $table->string('address');
            $table->string('password');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('national_id');
            $table->integer('rate')->nullable(); // user evaluation value scale from 1 to 10
            $table->integer('role_id')->unsigned();
            $table->rememberToken();
            $table->softDeletes();
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
        Schema::table('users', function(Blueprint  $table)
        {
            $table->dropForeign('users_role_id_foreign');
            Schema::drop('users');
        });
    }
}