<?php

namespace App\Http\Controllers;

use App\Club;
use App\Pertandingan;
use App\Formasi;
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
      $formasi=Formasi::all();
      return view('dashboard/insertTeam',['formasi'=>$formasi]);
    }

    public function addTeam(){


      $team = new Club();
      $team->nama_club = Input::get('namateam');
      $team->formasi_ID_FORMASI= Input::get('formasi');
      $team->save();
      flash()->overlay('Berhasil Menambahkan Team!');
      return redirect('/insertTeam');

    }

    public function addPertandingan(){

      $pertandingan = new Pertandingan();
      $pertandingan->nama_pertandingan = Input::get('pertandingan');
      $pertandingan->nama_stadion = Input::get('stadion');
      $pertandingan->tanggal_pertandingan = Input::get('tanggal');
      $pertandingan->save();
      flash()->overlay('Berhasil Menambahkan Pertandingan!');
      return redirect('/pilihTeam');
    }

}
