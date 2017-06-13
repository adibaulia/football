<?php

namespace App\Http\Controllers;

use App\Club;
use App\Pertandingan;
use App\Statistik;
use App\Http\Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class StatistikController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function inputStatistik()
    {
        \Session::keep('home');
        \Session::keep('away');
        \Session::keep('pertandingan');
        $home= \Session::get('home');
        $away= \Session::get('away');
        $pertandingan= \Session::get('pertandingan');
        //dd($home);
        return view ('dashboard/insertStatistik',['home'=> $home], ['away'=>$away]);
    }

    public function addStatistik(Request $request)
    {
      \Session::keep('home');
      \Session::keep('away');
      \Session::keep('pertandingan');
      $home= \Session::get('home');
      $away= \Session::get('away');
      $pertandingan= \Session::get('pertandingan');

      $homeStat=Statistik::where('pertandingan_ID_PERTANDINGAN', $pertandingan)->where('club_ID_CLUB', $home->ID_CLUB)->update([
            'scores'            => $request->score1,
            'possesion'         => $request->possesion1,
            'shots'             => $request->shot1,
            'fouls'             => $request->foul1,
            'corner_kicks'      => $request->corner1,
            'free_kicks'        => $request->freekick1,
            'pass_completed'    => $request->pass1,
            'crosses'           => $request->cross1,
            'interceptions'     => $request->interception1,
            'tackles'           => $request->tackle1,
            'save'              => $request->save1
      ]);

      $awayStat=Statistik::where('pertandingan_ID_PERTANDINGAN', $pertandingan)->where('club_ID_CLUB', $away->ID_CLUB)->update([
            'scores'            => $request->score2,
            'possesion'         => $request->possesion2,
            'shots'             => $request->shot2,
            'fouls'             => $request->foul2,
            'corner_kicks'      => $request->corner2,
            'free_kicks'        => $request->freekick2,
            'pass_completed'    => $request->pass2,
            'crosses'           => $request->cross2,
            'interceptions'     => $request->interception2,
            'tackles'           => $request->tackle2,
            'save'              => $request->save2
      ]);
      flash()->overlay('Berhasil Menambahkan Statistik!');
      return redirect('/dashboard');
    }




}
