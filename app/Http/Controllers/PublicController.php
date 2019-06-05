<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

use App\Ads;
use App\PublisherAds;
use App\AdsCreator;
use App\User;

class PublicController extends Controller
{
    public function index()
    {
        if($user = Auth::user())
        {
          if(Auth::user()->admin == false){
            $login = 'layouts.masterProfile';
          }
          else{
            $login = 'layouts.masterProfileAdmin';
          }
         
        }else{
          $login = 'layouts.master';
        }
      
     
        
      $ads = Ads::select('*')
        ->join('publisher_ads', 'ads.id', '=', 'publisher_ads.id')
        ->limit(4)
        ->orderBy('publisher_ads.id', 'DESC')
        ->get();


        $lowestPrice = Ads::select('*')
          ->join('publisher_ads', 'ads.id', '=', 'publisher_ads.id')
          ->limit(4)
          ->orderBy('publisher_ads.price', 'ASC')
          ->get();

      
        
      
      $indicator = 0;
      return view('mainPage.index', compact('login', 'ads', 'lowestPrice', 'indicator'));

    }

    public function search()
    {
      if($user = Auth::user())
      {
        $login = 'layouts.masterProfile';
      }
      else {
        $login = 'layouts.master';
      }
      $ads=[];
      $lowestPrice=[];
      $ads1=[];
      $ads2=[];

      $input=Input::only('category','community','priceFrom','priceTo');
      $category=$input['category'];
      $community=$input['community'];
      $priceFrom=$input['priceFrom'];
      $priceTo=$input['priceTo'];

      $priceFrom = ctype_digit($input['priceFrom']) ? intval($input['priceFrom']) : null;
      $priceTo = ctype_digit($input['priceTo']) ? intval($input['priceTo']) : null;

      $q= PublisherAds::query()->select('*');

      if(!empty(trim($category)))
      {
        $q->where('category',$category);
        $category="a";
      }
      if(!empty(trim($community)))
      {
        $q->Where('community',$community);
        $category=$category."b";
      }
      if($priceTo !== null && $priceFrom !== null)
      {
        $q->whereBetween('price',[$priceFrom,$priceTo]);
      }
      else if($priceTo !== null)
      {
        $q->where('price','<',$priceTo);
      }
      else if($priceFrom !== null)
      {
        $q->where('price','>',$priceFrom);
      }

      $ads=$q->join('ads', 'ads.id', '=', 'publisher_ads.id')
        ->get();

      $indicator = 1;

      return view('mainPage.index',compact('login','ads','lowestPrice', 'indicator'));
    }

    public function login()
    {
      return view('auth.login');
    }

    public function registration()
    {
      return view('auth.registration');
    }

    public function verify()
    {
      return view('auth.verify');
    }


    public function studentAd()
    {
      if($user = Auth::user())
      {
        $login = 'layouts.masterProfile';
        return view('userPage.studentAds.studentAd', compact('login'));
      }
      else{
        $login = 'layouts.master';
        return view('userPage.studentAds.studentAd', compact('login'));
      }
    }

    public function adLink($id){

      if($user = Auth::user())
      {
        $login = 'layouts.masterProfile';

      }
      else{
        $login = 'layouts.master';
      }

      $ad = Ads::select()
      ->join('publisher_ads', 'ads.id', '=', 'publisher_ads.id')
      ->where('ads.id', '=', $id)
      ->first();

      $userId=AdsCreator::select('userId')
      ->where('adId',$ad->id)
      ->first();

      $userId=explode(":", $userId)[1];
      $userId=explode("}", $userId)[0];

      $user=User::select('id','name','last_name')
      ->where('id', $userId)
      ->first();

      $pictures = explode("|", $ad->images);

      return view('userPage.adPages.seeAdPage', compact('login', 'ad', 'pictures', 'user'));
    }

    public function addStudentAd(){
      if($user = Auth::user())
      {
        $login = 'layouts.masterProfile';
      }
      else{
        $login = 'layouts.master';
      }
      return view('userPage.studentAds.addStudentAd', compact('login'));
    }

    public function publisherReview(){
      return view('userPage.profileReview.publisherReview');
    }
    public function studentReview(){
      return view('userPage.profileReview.studentReview');
    }



}
