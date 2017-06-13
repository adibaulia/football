@extends('layouts.noNav')
@section('title')
  Lihat Pertandingan
@endsection
@section('navbar')
  <li><a href="/register">Register Admin</a></li>
@endsection
@section('headerwrap')
  <div class="container">
    <div class="row">
      <div class="">
        <div class="col-lg-6 ">

          <div class="panel-heading"><a href="/team/{{$home->ID_CLUB}}">><h3> {{ $home->NAMA_CLUB }}</h3></a></div>
          <div class="panel-body">
            <div class="form-horizontal">
              {{ csrf_field() }}
              <div class="form-group">
                <label class="col-md-4 control-label">Score</label>
                <div class="col-md-6">
                  <div class="form-control">{{$home->SCORES}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Possesion</label>
                <div class="col-md-6">
                  <div class="form-control">{{$home->POSSESION}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Tembakan ke gawang</label>
                <div class="col-md-6">
                  <div class="form-control">{{$home->SHOTS}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Pelanggaran</label>
                <div class="col-md-6">
                  <div class="form-control">{{$home->FOULS}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Tendangan Sudut</label>
                <div class="col-md-6">
                  <div class="form-control">{{$home->CORNER_KICKS}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Tendangan Bebas</label>
                <div class="col-md-6">
                  <div class="form-control">{{$home->FREE_KICKS}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Akurasi Umpan</label>
                <div class="col-md-6">
                  <div class="form-control">{{$home->PASS_COMPLETED}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Umpan Silang</label>
                <div class="col-md-6">
                  <div class="form-control">{{$home->CROSSES}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Interception</label>
                <div class="col-md-6">
                  <div class="form-control">{{$home->INTERCEPTIONS}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Tackle</label>
                <div class="col-md-6">
                  <div class="form-control">{{$home->TACKLES}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Penyelamatan Gawang</label>
                <div class="col-md-6">
                  <div class="form-control">{{$home->SAVE}}</div>
                </div>
              </div>
          </div>
        </div>
        </div>
        <div class="col-lg-6 ">

          <div class="panel-heading"><a href="/team/{{$away->ID_CLUB}}">><h3> {{ $away->NAMA_CLUB }}</h3></a></div>
          <div class="panel-body">
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-md-4 control-label">Score</label>
                <div class="col-md-6">
                  <div class="form-control">{{$away->SCORES}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Possesion</label>
                <div class="col-md-6">
                  <div class="form-control">{{$away->POSSESION}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Tembakan ke gawang</label>
                <div class="col-md-6">
                  <div class="form-control">{{$away->SHOTS}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Pelanggaran</label>
                <div class="col-md-6">
                  <div class="form-control">{{$away->FOULS}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Tendangan Sudut</label>
                <div class="col-md-6">
                  <div class="form-control">{{$away->CORNER_KICKS}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Tendangan Bebas</label>
                <div class="col-md-6">
                  <div class="form-control">{{$away->FREE_KICKS}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Akurasi Umpan</label>
                <div class="col-md-6">
                  <div class="form-control">{{$away->PASS_COMPLETED}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Umpan Silang</label>
                <div class="col-md-6">
                  <div class="form-control">{{$away->CROSSES}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Interception</label>
                <div class="col-md-6">
                  <div class="form-control">{{$away->INTERCEPTIONS}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Tackle</label>
                <div class="col-md-6">
                  <div class="form-control">{{$away->TACKLES}}</div>
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-4 control-label">Penyelamatan Gawang</label>
                <div class="col-md-6">
                  <div class="form-control">{{$away->SAVE}}</div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>
@endsection
