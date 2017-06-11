<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware;
use Laracasts\Flash\FlashServiceProvider;

class LoginController extends Controller
{
      public function username()
    {
      return 'username';
    }

    public function __construct()
    {
      $this->middleware('guest');
    }

    public function getLogin()
    {
      return view('Login.formLogin');
    }


    public function checkLogin(Request $request)
    {

      if(Auth::attempt([
        'username' => $request->username,
        'password' => $request->password
       ])){
         flash('notif', 'Succes');
         return redirect('login');
       }else{
         flash()->overlay('Login Gagal');
         Auth::logout();
         return redirect('/');
       }
    }
}
