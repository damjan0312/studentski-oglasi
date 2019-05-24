<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublisheradsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publisher_ads', function (Blueprint $table) {
          $table->integer('id');
          $table->double('price');
          $table->string('category');
          $table->string('community');
          $table->string('street');
          $table->string('number');
          $table->integer('squareFeet');
          $table->integer('numOfRooms');
          $table->integer('numOfBathrooms');
          $table->string('typeOfHeating');
          $table->boolean('tv')->default(false);
          $table->boolean('internet')->default(false);
          $table->boolean('airCondition')->default(false);
          $table->boolean('parking')->default(false);
          $table->string('images')->default('');

          $table->foreign('id')->references('id')->on('ads');
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
        Schema::dropIfExists('publisherads');
    }
}
