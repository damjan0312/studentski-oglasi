<?php

namespace App\Http\Controllers;

use App\student;
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
      if(Auth::user()->$role== false)
      {
        $student=Student::where('id', $user->id)->first();
        return view('userPage.studentProfile',compact('user','student'));
      }
      else {
          return view('userPage.publisherProfile',compact('user'));
      }
    }

    public function store(Request $request)
    {
      
        if(Auth::user()->student==true)
        {
          $input=Input::only('name','last_name','email','phoneNumber');
          Auth::user()->name=$input['name'];
          Auth::user()->last_name=$input['last_name'];
          Auth::user()->email=$input['email'];
          Auth::user()->phoneNumber=$input['phoneNumber'];
          Auth::user()->save();
          $user=Auth::user();
          return view('userPage.publisherProfile',compact('user'));
        }
        else {
          $input=Input::only('name','last_name','email','phoneNumber','faculty','yearOfStudy');
          Auth::user()->name=$input['name'];
          Auth::user()->last_name=$input['last_name'];
          Auth::user()->email=$input['email'];
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
      return view('userPage.adPages.adPage');
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





}
