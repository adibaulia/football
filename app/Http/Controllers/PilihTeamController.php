<?php

namespace App\Http\Controllers;

use App\Club;
use App\Pertandingan;
use App\Http\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class PilihTeamController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function getTeam()
  {
    return view('dashboard/pilihTeam');
  }
}
