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

    public function postRegister()
    {
      $user = new User();
      $user->username = Input::get('username');
      $user->password = bcrypt(Input::get('password'));
      $user->save();
      return redirect('/');

    }
}
