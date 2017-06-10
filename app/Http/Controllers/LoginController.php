<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
  public function login(Request $req)
  {
    $username = $req->input('username');
    $password = $req->input('password');

    $checkLogin = DB::table('admin')->where([
      'username'  =>  $username,
      'password'  =>  md5($password)
    ])->get();

    if (count($checkLogin) > 0) {
      echo "Login Sukses";
      return view('home');
    }
    else {
      echo "Login Gagal";
    }
  }
}
