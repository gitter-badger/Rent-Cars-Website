<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class Cars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->text('picture');
            $table->string('model');
            $table->string('color');
            $table->string('license_number');
            $table->string('motor_number');
            $table->string('chassis_number');
            $table->string('plate_number');
            $table->integer('user_id')->unsigned(); // the car owner
            $table->decimal('price',10,2);
            $table->text('condition');
            $table->integer('expenses');
            $table->integer('available');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('cars', function(Blueprint  $table)
        {
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cars');
    }
}
