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
        Schema::create('publisherads', function (Blueprint $table) {
          $table->integer('id');
          $table->string('title');
          $table->string('description');
          $table->integer('price');
          $table->string('category');
          $table->string('street');
          $table->string('number');
          $table->string('squareFeet');
          $table->string('numOfRooms');
          $table->string('numOfBathrooms');
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
