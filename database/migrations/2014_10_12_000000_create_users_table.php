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
            $table->string('firstname');
            $table->string('lastname');
            //$table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('gender',[
                'male','female'
            ])->default(null);
            $table->longText('token_register');
            $table->enum('status_account',[
                'yes','no'
            ])->default('no');
            $table->enum('status_active',[
                'active','pending'
            ])->default('pending');
            $table->enum('status_online', [
                'online', 'offline'
            ])->default('offline');
            $table->enum('license',[
                'yes','no'
            ])->default('no');
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
