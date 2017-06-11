<?php

namespace App\Http\Controllers;

use App\Http\Middleware;
use Illuminate\Http\Request;

class Dashboard extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
      return view('dashboard/index');
    }

}
