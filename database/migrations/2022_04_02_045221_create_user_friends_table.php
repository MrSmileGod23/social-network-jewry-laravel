<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_friends', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('first_id')->nullable();
            $table->foreign('first_id')->references('id')->on('users');
            $table->unsignedBigInteger('second_id')->nullable();
            $table->foreign('second_id')->references('id')->on('users');
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
        Schema::dropIfExists('user_friends');
    }
}
