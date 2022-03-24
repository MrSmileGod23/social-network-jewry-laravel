<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('genre_id')->unsigned();
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->integer('publisher_id')->unsigned();
            $table->foreign('publisher_id')->references('id')->on('publishers');
            $table->string('platform')->default('steam');
            $table->string('name');
            $table->text('info');
            $table->float('price');
            $table->date('release');
            $table->integer('amount');
            $table->text('img');
            $table->float('discount')->nullable();
            $table->string('key')->unique();
            $table->string('slug');
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
        Schema::dropIfExists('products');
    }
}
