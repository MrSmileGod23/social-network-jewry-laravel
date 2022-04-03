<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
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
            $table->id();
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_admin')->nullable();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('gender');
            $table->text('img')->nullable();
            $table->date('birth_date')->nullable();
            $table->integer('telephone')->nullable();
            $table->text('info')->nullable();
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
