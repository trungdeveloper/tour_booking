<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

  public function login()
  {
    return view('login/login');
  }


  public function authenticate(Request $request)
  {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
      return redirect()->route('home');
    }

    else {
      return redirect()->route('login')->withInput();
    }
  }


  public function logout()
  {
    Auth::logout();
    return redirect()->route('home');
  }

}
