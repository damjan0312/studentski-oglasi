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
          $table->date('dateCreated');
          $table->date('dateExpired');
          $table->integer('categoryID');
          $table->string('description');
          $table->foreign('categoryID')->references('id')->on('category')->onDelete('cascade');;
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
        Schema::dropIfExists('ads');
    }
}
