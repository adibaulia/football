<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;


class RegisterController extends Controller
{
    public function __construct()
    {
      $this->middleware('guest');
    }

    public function getRegister()
    {
      return view('Register.formRegist');
    }

    public function postRegister(Request $request)
    {
      $this->validate($request, [
        'username'  => 'unique:users,username'
      ]);

      $user = new User();
      $user->username = $request->username;
      $user->password = bcrypt(Input::get('password'));
      $user->save();
      flash()->overlay('Berhasil Mendaftar! Silahkan Login');
      return redirect('login');
    }

}
