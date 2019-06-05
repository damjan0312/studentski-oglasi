<?php

namespace App\Http\Controllers;

use App\student;
use App\AdsCreator;
use App\Ads;
use App\PublisherAds;
use App\StudentAds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
    /*  $login;
        if(Auth::check()==1)
          $login='layouts.masterProfile';
        else
          $login='layouts.master'; */



        $login='layouts.masterProfile';
        return view('mainPage.index', compact('login'));
    }

    public function profile()
    {
      $role='student';
      $user=Auth::user();
      $ads=  Ads::select('*')
        ->join('ads_creators', 'ads.id', '=', 'ads_creators.id')
        ->where('ads_creators.userId','=',Auth::user()->id)
        ->orderBy('ads.id', 'DESC')
        ->get();

      if(Auth::user()->$role== false)
      {
        $student=Student::where('id', $user->id)->first();

        return view('userPage.studentProfile',compact('user','student','ads'));
      }
      else {
        return view('userPage.publisherProfile',compact('user','ads'));
      }
    }


    public function store(Request $request)
    {

        if(Auth::user()->student==true)
        {
          $input=Input::only('name','last_name','phoneNumber');
          Auth::user()->name=$input['name'];
          Auth::user()->last_name=$input['last_name'];
          Auth::user()->phoneNumber=$input['phoneNumber'];
          Auth::user()->save();
          $user=Auth::user();
          return view('userPage.publisherProfile',compact('user'));
        }
        else {
          $input=Input::only('name','last_name','phoneNumber','faculty','yearOfStudy');
          Auth::user()->name=$input['name'];
          Auth::user()->last_name=$input['last_name'];
          Auth::user()->phoneNumber=$input['phoneNumber'];
          Auth::user()->save();
          $user=Auth::user();
          $student=Student::where('id', $user->id)->first();
          $student->faculty=$input['faculty'];
          $student->yearOfStudy=$input['yearOfStudy'];
          $student->save();
          return view('userPage.studentProfile',compact('user','student'));
        }

    }

    public function ad()
    {
      if(Auth::user()->student==true)
      {
        $login = 'layouts.masterProfile';
        return view('userPage.adPages.adPage',compact('login'));
      }
      else {
        $login = 'layouts.masterProfile';
        return view('userPage.studentAds.addStudentAd',compact('login'));
      }
    }

    public function seeAdPage()
    {
      $login = 'layouts.masterProfile';
      return view('userPage.adPages.seeAdPage', compact('login'));
    }

    public function uploadImage()
    {
      return view('userPage.adPages.imageUpload');
    }

    public function adminPanel(){
      return view('adminPanel.adminPanel');
    }

    public function deleteAd()
    {
      $id=Input::get('id');
      $ad=AdsCreator::where([
                    ['userId','=',Auth::user()->id],
                    ['adId', '=', $id]
                ]);
     $ad->delete();
      $ad= Ads::where('id','=',$id);
      $ad->delete();
      if(Auth::user()->student==false)
      {
        $studAd= StudentAds::where('id','=',$id);
        $studAd->delete();
      }
      else
      {
        $pubAd= PublisherAds::where('id','=',$id);
        $pubAd->delete();
      }
      return redirect()->action('HomeController@profile');

    }

}
