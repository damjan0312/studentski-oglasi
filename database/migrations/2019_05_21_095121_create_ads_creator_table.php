<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdsCreatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_creators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('userId')->default(0);
            $table->integer('adId')->default(0);
            $table->foreign('userId')->references('id')->on('users');
            $table->foreign('adId')->references('id')->on('ads');
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
        Schema::dropIfExists('ads_creator');
    }
}
