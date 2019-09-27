<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //making the table schema
        Schema::create('userstrial',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('fullname');
            $table->string('username');
            $table->string('email');
            $table->string('age');
            $table->string('mobileno');
            $table->string('password');
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
