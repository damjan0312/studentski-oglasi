<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
      return view('welcome');
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
}
