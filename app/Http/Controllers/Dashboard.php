<?php

namespace App\Http\Controllers;

use App\Club;
use App\Http\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class Dashboard extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
      return view('dashboard/index');
    }

    public function insertPertandingan()
    {
      return view('dashboard/insertPertandingan');
    }

    public function insertTeam()
    {

      return view('dashboard/insertTeam');
    }

    public function addTeam(){
      $this->validate($request, [
        'idteam'  => 'unique:club,idteam'
      ]);

      $team = new Club();
      $team->nama_club = Input::get('namateam');
      $team->id_club = Input::get('idteam');
      $team->save();
      return redirect('/insertTeam');

    }
}
