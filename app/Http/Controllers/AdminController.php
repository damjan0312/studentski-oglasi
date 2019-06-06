<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

  public function adminPanel(){
    $users=User::all();

    return view('adminPanel.adminPanel',compact('users'));
  }

  public function getData()
  {

  }
}
