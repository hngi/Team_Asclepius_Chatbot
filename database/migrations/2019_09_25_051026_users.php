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
        Schema::create('users',function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('fullname',200)->nullable();
            $table->string('username',200);
            $table->string('email',200);
            $table->string('telno',20)->nullable();
            $table->string('password',200);
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
