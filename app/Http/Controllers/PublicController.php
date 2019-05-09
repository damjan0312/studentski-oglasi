<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
      $login = 'layouts.master';
      return view('mainPage.index', compact('login'));
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
      $login = 'layouts.master';
      return view('userPage.adPages.seeAdPage', compact('login'));
    }

}
