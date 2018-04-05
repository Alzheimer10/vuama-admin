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
            $table->string('lastname');
            $table->string('email',191)->unique();
            $table->string('ci',14)->unique();
            $table->string('password');
            $table->string('phone')->nullable();
            $table->string('additional_phone')->nullable();
            $table->longText('description')->nullable();
            $table->string('dbirth')->nullable();
            $table->unsignedInteger('gender')->nullable();
            $table->string('avatar')->default("avatars/default_avatar.png");
            $table->unsignedInteger('status')->default(1);
            $table->boolean('confirmed')->default(false);
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
