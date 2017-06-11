<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Middleware;

class MenuController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }
    public function menu()
    {
      return view('welcome');
    }
}
