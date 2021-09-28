<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Employee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function(Blueprint $table){
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->date('dob');
            $table->string('gender');
            $table->string('address');
            $table->bigInteger('phone');
            $table->float('salary');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    protected $primaryKey = 'id';
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
