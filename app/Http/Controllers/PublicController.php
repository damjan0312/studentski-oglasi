<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;
use Illuminate\Support\Facades\Input;

class PublicController extends Controller
{
    public function index()
    {
      if($user = Auth::user())
      {
        $login = 'layouts.masterProfile';
        return view('mainPage.index', compact('login'));
      }
      else{
        $login = 'layouts.master';
        return view('mainPage.index', compact('login'));
      }

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

    public function seeAdPage()
    {

      if($user = Auth::user())
      {
        $login = 'layouts.masterProfile';
        return view('userPage.adPages.seeAdPage', compact('login'));
      }
      else{
        $login = 'layouts.master';
        return view('userPage.adPages.seeAdPage', compact('login'));
      }
      
    }

}
