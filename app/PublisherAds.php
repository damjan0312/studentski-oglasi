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
