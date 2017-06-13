<?php

namespace App\Http\Controllers;

use App\Club;
use App\Pertandingan;
use App\Statistik;
use App\Http\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class PilihTeamController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  
  public function getTeam()
  {
    $pilihTeam=Club::all();
    return view('dashboard/pilihTeam', ['pilihTeam' => $pilihTeam]);
  }
  public function addPilihTeam()
  {
    $pertandingan= Pertandingan::max('ID_PERTANDINGAN');
    $home = new Statistik();
    $home->status = 'Home';
    $home->club_ID_CLUB= Input::get('teamhome');
    $home->pertandingan_ID_PERTANDINGAN= $pertandingan;
    $home->save();

    $away = new Statistik();
    $away->status = 'Away';
    $away->club_ID_CLUB= Input::get('teamaway');
    $away->pertandingan_ID_PERTANDINGAN= $pertandingan;
    $away->save();

    flash()->overlay('Berhasil Menambahkan Team!');
    return redirect('/pilihTeam');
  }
}