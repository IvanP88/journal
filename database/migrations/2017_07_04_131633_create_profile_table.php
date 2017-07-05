<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table){
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('last_name', 64)->default('last_name');
            $table->unsignedInteger('age')->default(6);
            $table->unsignedInteger('sex_id')->default(1);
            $table->foreign('sex_id')->references('id')->on('sex');
            $table->string('coordinate', 256)->default('0');
            $table->string('cell_phone', 64)->default('0');
            $table->string('address', 256)->default('_');
            $table->timestamp('birthday');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}
