<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublisherAds extends Model
{
  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id','title','description','price','category','street','number','squareFeet','numOfRooms','numOfBathrooms','typeOfHeating','tv','internet',
  ];
}
$table->bigIncrements('id');
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
