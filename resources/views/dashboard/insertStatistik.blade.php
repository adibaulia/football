@extends('layouts.master')
@section('title') Statistik
@endsection
@section('headerwrap')
<div class="container">
  <div class="row">
    <div class="">
      <div class="col-lg-6 ">

        <div class="panel-heading"><h3>Team Home <br> {{ $home->NAMA_CLUB }}</h3></div>
        <div class="panel-body">
          <form class="form-horizontal" role="form" method="POST" action="/addStatistik">
            {{ csrf_field() }}
            <div class="form-group">
              <label class="col-md-4 control-label">Score</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="score1"  required autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Possesion</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="possesion1"  required autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Tembakan ke gawang</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="shot1" required  autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Pelanggaran</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="foul1"  required autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Tendangan Sudut</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="corner1"  required autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Tendangan Bebas</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="freekick1" required  autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Akurasi Umpan</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="pass1" required  autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Umpan Silang</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="cross1" required  autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Interception</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="interception1"  required autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Tackle</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="tackle1" required  autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Penyelamatan Gawang</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="save1" required  autofocus>
              </div>
            </div>
        </div>
      </div>
      <div class="col-lg-6 ">

        <div class="panel-heading"><h3>Team Away <br> {{ $away->NAMA_CLUB }}</h3></div>
        <div class="panel-body">
          <div class="form-horizontal">
            <div class="form-group">
              <label class="col-md-4 control-label">Score</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="score2" required  autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Possesion</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="possesion2"  required autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Tembakan ke gawang</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="shot2" required  autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Pelanggaran</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="foul2" required  autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Tendangan Sudut</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="corner2" required  autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Tendangan Bebas</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="freekick2" required  autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Akurasi Umpan</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="pass2" required   autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Umpan Silang</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="cross2" required  autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Interception</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="interception2" required  autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Tackle</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="tackle2" required  autofocus>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Penyelamatan Gawang</label>
              <div class="col-md-6">
                <input type="number" class="form-control" name="save2"  autofocus>
              </div>
            </div>

          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="col-md-4 col-lg-offset-4">
          <button type="submit" class="btn btn-primary">
                              Tambah Statistik
          </button>

        </div>
      </div>

    </div>
    </form>
  </div>
</div>
<br><br>
@endsection
