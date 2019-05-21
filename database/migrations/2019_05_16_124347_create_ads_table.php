<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Ads', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('headline');
          $table->timestamp('dateCreated');
          $table->string('dateExpired');
          $table->string('categoryID');
          $table->string('description');
          $table->foreign('categoryID')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads');
    }
}
