<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hikes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id')->references('id')->on('hike_types');
            $table->unsignedBigInteger('city_id')->nullable();
            $table->foreign('city_id')->references('id')->on('cities');
            $table->string('name');
            $table->string('difficulty');
            $table->date('startDate');
            $table->date('endDate');
            $table->text('info');
            $table->text('food');
            $table->text('equipment');
            $table->text('route');
            $table->float('mileage');
            $table->text('img');
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
        Schema::dropIfExists('hikes');
    }
}
