<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->string('address');
            $table->enum('gender',['Male','Female','Others']);
            $table->date('dateofbirth');
            $table->string('phone_no');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('userTypeId')->unsigned();
            $table->foreign('userTypeId')->references('usertype_id')->on('usertype');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
