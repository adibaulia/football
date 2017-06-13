<?php

namespace App\Http\Controllers;

use App\Club;
use App\Pertandingan;
use App\Statistik;
use App\Http\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Formasi;

class ListPertandingan extends Controller
{
  public function __construct()
  {
      $this->middleware('guest');
  }


  public function index()
  {

    $list=Pertandingan::all();

    return view('listPertandingan',['list'=>$list]);
  }

  public function show($id)
  {
    //$home=Statistik::where('Statistik.pertandingan_ID_PERTANDINGAN', $id)->where('Statistik.status','home')->first();
    $home=Statistik::join('Club','Club.ID_CLUB','=','Statistik.club_ID_CLUB')->
              where('Statistik.pertandingan_ID_PERTANDINGAN', $id)->where('Statistik.status','home')->first();
    $away=Statistik::join('Club','Club.ID_CLUB','=','Statistik.club_ID_CLUB')->
              where('Statistik.pertandingan_ID_PERTANDINGAN', $id)->where('Statistik.status','away')->first();
    //$home->team=Club::where('id_club',$home->club_ID_CLUB)->first();
    //$away->team=Club::where('id_club',$away->club_ID_CLUB)->first();
//dd($home->SCORES);


    return view('showPertandingan' , ['home' => $home], ['away' => $away]);
  }

  public function team($team){
    //$profileTeam=Club::where('ID_CLUB', $team)->first();
    $players=Club::leftjoin('Pemain','Pemain.club_ID_CLUB','=','Club.ID_CLUB')->where('Club.ID_CLUB', $team)->get();
    $formasi=Formasi::join('Club','Club.formasi_ID_FORMASI','=','Formasi.ID_FORMASI')->where('Club.ID_CLUB', $team)->first();
   //dd($formasi->NAMA_CLUB);
    //dd($profileTeam);
    return view('profileTeam', ['team' => $formasi], ['players'=>$players]);

  }

}
