<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;

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
      if(Auth::user()->$role== false)
      {
        return view('userPage.studentProfile');
      }
      else {
          return view('userPage.publisherProfile');
      }
    }

    public function ad()
    {
      return view('userPage.adPages.adPage');
    }

    


}
