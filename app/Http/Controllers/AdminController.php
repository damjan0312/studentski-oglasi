<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Ads;
use App\StudentAds;
use App\AdsCreator;
use App\PublisherAds;
use Illuminate\Support\Facades\Input;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function adminPanel(){
    $users=User::all();
    $studentAds=Ads::Select('*')
      ->join('student_ads','ads.id','=','student_ads.id')
      ->join('ads_creators','ads.id','=','ads_creators.adId')
      ->get();
    $publisherAds=Ads::Select('*')
      ->join('publisher_ads','ads.id','=','publisher_ads.id')
      ->join('ads_creators','ads.id','=','ads_creators.adId')
      ->get();
    return view('adminPanel.adminPanel',compact('users','studentAds','publisherAds'));
  }

  public function deleteUser()
  {
    $id=Input::get('id');
    $user=User::where('id','=',$id);
    $user->delete();
    return redirect()->action('AdminController@adminPanel');
  }

  public function deletePubAd()
  {
    $id=Input::get('id');
    $ad=AdsCreator::where('adId', '=', $id);
    $ad->delete();
    $ad= Ads::where('id','=',$id);
    $ad->delete();
    $pubAd= PublisherAds::where('id','=',$id);
    $pubAd->delete();
    return redirect()->action('AdminController@adminPanel');
  }


  public function deleteStudAd()
  {
    $id=Input::get('id');
    $ad=AdsCreator::where('adId', '=', $id);
    $ad->delete();
    $ad= Ads::where('id','=',$id);
    $ad->delete();
    $studAd= StudentAds::where('id','=',$id);
    $studAd->delete();
    return redirect()->action('AdminController@adminPanel');
  }

}

