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
          $table->string('category');
          $table->string('street');
          $table->string('number');
          $table->string('categoryID');
          $table->timestamp('email_verified_at')->nullable();
          $table->string('password');
          $table->boolean('admin')->default(false);
          $table->boolean('student');
          $table->string('phoneNumber')->default('');
          $table->integer('numberOfAds')->default(0);
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
        Schema::dropIfExists('ads');
    }
}
